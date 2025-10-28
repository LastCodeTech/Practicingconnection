
document.addEventListener('DOMContentLoaded', () => {
function create() {
    let texxt = document.getElementById('myTextarea');
    let texxtValue = texxt.value.trim();

    if (texxtValue === "") {
      alert("Please enter a task!");
      return;
    }

    let newElement = document.createElement('div');
    newElement.innerHTML = `
      <div class="bg-white flex gap-5 py-2 px-3 rounded-2xl md:gap-10 items-center mx-5 my-3">
        <div class="flex items-center">
          <input
            type="checkbox"
            class="appearance-none w-5 h-5 md:h-8 md:w-8 border-2 border-gray-400 rounded-md bg-white checked:bg-blue-600 checked:border-transparent peer"
          />
          <svg
            class="absolute w-4 h-4 md:h-7 md:w-7 text-white pointer-events-none hidden peer-checked:block"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="4"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
        </div>
        <h1 class="text-base md:text-xl text-gray-700" id="todotext">
          ${texxtValue}
        </h1>
        <button class="deleteBtn border-1 rounded-xl bg-[#FB4141] text-white font-semi-bold hover:bg-[#FF9B2F] text-base py-1 px-2 md:text-xl capitalize">Delete</button>
      </div>
    `;

    
    let insertedHere = document.getElementById('insertedHere');
    insertedHere.appendChild(newElement);

    texxt.value = "";

   
    newElement.querySelector('.deleteBtn').addEventListener('click', () => {
      newElement.remove();
    });
  }

  let addbtn = document.getElementById('addbtn');
  let backHome = document.getElementById('backHome');

  addbtn.addEventListener('click', function() {
    backHome.classList.remove('hidden');
    create();
  });
});