<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="small-modal-{{$itemID}}">
  <div class="relative w-auto my-6 mx-auto max-w-sm">
    <!--content-->
    <div class="border-0 rounded-lg overflow-hidden shadow-lg relative flex flex-col w-full bg-white">
      <!--header-->
        <button class="absolute top-3 right-3 p-1 border-0 text-gray-300 hover:text-gray-900 transition duration-150 ease-in-out" onclick="toggleModal('small-modal-{{$itemID}}')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        <h3 class="mt-6 p-5 text-2xl text-left font-semibold uppercase">unwiderruflich löschen</h3>
      <!--body-->
      <div class="px-6 pb-6 text-left">
        <p class="text-gray-500 text-base">Bitte beachten Sie das, das Element unwiderruflich gelöscht wird mit all seinen Einstellungen und Dateien.</p>
      </div>
      <!--footer-->
      <div class="flex items-center justify-center p-6 border-t border-solid bg-gray-50">
        <button class="w-44 text-gray-500 hover:text-gray-900 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-4 transition duration-150 ease-in-out" type="button" onclick="toggleModal('small-modal-{{$itemID}}')">
          nicht löschen
        </button>
        <button class="w-44 flex justify-center bg-emerald-500 active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none border-2 border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition duration-150 ease-in-out" type="button" wire:click="delete({{$itemID}})">
          löschen
        </button>
      </div>
    </div>
  </div>
</div>
<div class="hidden fixed inset-0 z-40 bg-gray-900 bg-opacity-75 transition-opacity" id="small-modal-{{$itemID}}-backdrop"></div>