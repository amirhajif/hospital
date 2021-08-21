function logout(){
    let message=window.confirm("آیا مطمئن هستید؟");
    if (message)
    {
        location.replace('logout.php');
    }
}