console.log('Jean')

Array.from(document.getElementsByClassName('nav-link')).forEach(element => {
    element.addEventListener('click', function() {

        if (arry.length > 1) {
            arry.shift()
            arry.push(element.href)
        } else {
            arry.push(element.href)
        }
        console.log(arry);
    });

});


