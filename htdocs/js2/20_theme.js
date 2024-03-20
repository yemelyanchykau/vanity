function change_theme()
{
    var on;
    var x = document.getElementById('body');
    var y = "";
    y = x.className;
    //y = localStorage.setItem('theme', '');

    var z = "";
    if(y=="dark-theme")	{on=0;z = "";}
    else 		{on=1;z = "dark-theme";}

    x.className = z;

    localStorage.setItem('theme', z);
    if(on)
    document.cookie = "theme=dark";
    else
    document.cookie = "theme=";

    return false;
}
function set_theme()
{
    var x = document.getElementById('body');
    var y = "";
    //y = x.className;
    y = localStorage.getItem('theme');
    x.className = y;

    x = document.getElementById('theme');
    if(y=="")
    x.checked = false;
    else
    x.checked = true;
}
//set_theme();
