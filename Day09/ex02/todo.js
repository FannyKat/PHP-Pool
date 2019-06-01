const newBtn = document.getElementById("new")
const ft_list = document.getElementById("ft_list")

newBtn.addEventListener('click', showForm)

const cookies = document.cookie.split(';').reduce((cookies, cookie) => {
    const [ name, value ] = cookie.split('=').map(c => c.trim());
    cookies[name] = value;
    return cookies;
}, {});

let i = 0
const keys = Object.keys(cookies)

if (keys[0] !== "") {
    i = keys.length
    let values = Object.values(cookies)
    values.forEach((val, index) => {
        const div = document.createElement('div')
        div.className = `ft_item-${keys[index]}`
        div.id = keys[index]
        div.innerHTML = `<p onclick="deleteTodo(${keys[index]})">${val}</p>`
        ft_list.insertBefore(div, ft_list.firstChild)
		document.getElementById("ft_list").style.textAlign = "right";
		document.getElementById("ft_list").style.fontSize = "xx-large";
    })
}
   
function deleteTodo(id) {
    let el = document.getElementById(id)
    const confirm = window.confirm(`Do you really want to remove this task ${id}?`);
    if (confirm) {
        ft_list.removeChild(el)
        deleteCookie(id)
    } 
}

function addTodo(todo) {
    todo = todo.trim()
    const div = document.createElement('div')
    div.className = `ft_item-${i}`
    div.id = i
    div.innerHTML = `<p onclick="deleteTodo(${i})">${todo}</p>`
    ft_list.insertBefore(div, ft_list.firstChild)
	document.getElementById("ft_list").style.textAlign = "right";
	document.getElementById("ft_list").style.fontSize = "xx-large";
    createCookie(i++, todo, 7)
}

function showForm () {
    let input = window.prompt("What Task do you want to create ?")
    if (input)
        addTodo(input)
}

function createCookie(cookieName,cookieValue,daysToExpire) {
    let date = new Date()
    date.setTime(date.getTime() + (daysToExpire * 24 * 60 * 60 * 1000))
    document.cookie = cookieName + "=" + cookieValue + "; expires=" + date.toGMTString()
}

function deleteCookie( name ) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
  }
