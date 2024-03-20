function set_cookie(name,value)
{
    var date = new Date(),expires = 'expires=';
    date.setTime(date.getTime() + 315360000000);
    expires += date.toGMTString();
    document.cookie = name + '=' + value + '; ' + expires + '; path=/';
}