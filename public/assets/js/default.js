window.onload = function() {

    let name = 'DaRosa template';
    console.log(`Started ${name} app.`) ; 

    document.getElementsByClassName('close')[0].addEventListener('click', () => {
        document.getElementsByClassName('msg-body')[0].style.display = 'none'; 
    });

}