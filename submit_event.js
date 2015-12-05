/**
 * Created by Андрей on 05.12.2015.
 */
jQuery(".auth_button").click(function(event){
    event.stopPropagation();
    event.preventDefault();
    var login = jQuery('.login').val();
    var password = jQuery('.password').val();
    console.log(login, password);
});
