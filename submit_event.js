/**
 * Created by Андрей on 05.12.2015.
 */
function main() {
    initListenEvent();
}
function initListenEvent () {
    jQuery(".auth_button").click(handlerClickSubmit);
}
function handlerClickSubmit(event) {
    var data = {};
    event.stopPropagation();
    event.preventDefault();
    data.login = jQuery('.login').val();
    data.password = jQuery('.password').val();
    sendRequest(data);
}
function sendRequest(data) {
    jQuery.ajax({
        type: 'GET',
        url: 'auth.php',
        data: {login: '', password: ''},
        dataType: 'json',
        success: function sendRequstSuccess () { alert('Какое-нибудь сообщение, что все окей'); }
        }
    )
}
jQuery(document).ready(main);
