

    AOS.init();
  let visibilityBtn = document.querySelectorAll('.visibilityBtn');
  let pass = document.querySelector('.pass');
  let eyeContainer = document.querySelector('.eyeContainer');
  

  let display = 'hide';
  function togglePasswordVisiblity(){
    if(display =='show'){
        display = 'hide';
        pass.type='password';
        eyeContainer.innerHTML='<button class="fa-solid fa-eye text-xl text-slate-800 cursor-pointer"></button>';
    }
    else{
         display = 'show';
        pass.type='text';
        eyeContainer.innerHTML = '<button class="fa-solid fa-eye-slash text-xl text-slate-800 cursor-pointer"></button>';

    }
  }



// visibilityBtn.forEach(table =>{
//     table.addEventListener('click',function(){
// togglePasswordVisiblity();
// console.log('hi')
//     })
// })


// for (let btn of btns) {
//     btn.addEventListener('click', () => {
//         console.log('hi');
//     });
// }
let  btns = document.getElementsByTagName('button');
Array.from(btns).forEach(btn => {
    btn.addEventListener('click',function(){
 console.log('hi');
    })
});
