let pswd = document.querySelector('#password');
        let show     = document.querySelector('.show');
        show.onclick = function() {
            if(pswd.type === 'password'){
                pswd.setAttribute('type','text');
                show.classList.add('hide');
            }else{
                pswd.setAttribute('type','password');
                show.classList.remove('hide');
            }
        }