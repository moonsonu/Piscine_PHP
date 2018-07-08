var tab = [];
var index = 0;
var flag = 0;
var name = 1;
var cookie = [];

var setCookie = function(name, value, exp) {
	var date = new Date();
	date.setTime(date.getTime() + exp*24*60*60*1000);
	document.cookie = name + '=' + value + ';expires=' + date.toUTCString() + ';path=/';
};

var getCookie = function(name) {
	var value = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
	return value? value[2] : null;
};

var deleteCookie = function(name) {
	document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function add_new() {

var todo;
	todo = prompt("new todo :");
		alert(todo);
	if (todo) {
	var list = document.getElementById("ft_list");
	var newitem = document.createElement("DIV");
	newitem.setAttribute("class", "newelem");
	newitem.setAttribute("onclick", delete_list(this));
	newitem.setAttribute("index", index);
    var textnode = document.createTextNode(todo);
    tab[index] = todo;
    index++;
    newitem.appendChild(textnode);
    list.insertBefore(newitem, list.childNodes[0]);
	}
}

function delete_list(obj) {
	  if (confirm("are you sure ?") == true)
  {
    var ind = obj.getAttribute("index");
    tab.splice(ind, 1);
    obj.parentNode.removeChild(obj);
	 update_cookies();
  }
}
