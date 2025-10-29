

    AOS.init();
  let display = 'hide';
  function togglePasswordVisibility(passwordElement, eyeElement){ 
    if(display =='show'){
        passwordElement.type='password';
        eyeElement.innerHTML='<i class="fa-solid fa-eye text-xl text-slate-800 cursor-pointer"></i>';
        display = 'hide';
    }
    else{
        passwordElement.type='text';
        eyeElement.innerHTML = '<i class="fa-solid fa-eye-slash text-xl text-slate-800 cursor-pointer"></i>';
        display = 'show';
    }
  }
let  btns = document.querySelectorAll('.eyeContainer');
for(let i = 0; i < btns.length; i++){
  btns[i].addEventListener('click', function(){
    let thisEyeContainer = this;
    let theMainDiv = thisEyeContainer.parentNode.parentNode;
    let siblingPassword = theMainDiv.querySelector(".pass");
    togglePasswordVisibility(siblingPassword, thisEyeContainer);
  });
}


