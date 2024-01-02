<nav class="{{ ! $sideNav ? 'shadow-md' : '' }}  w-full bg-white py-4 px-6 flex justify-between items-center z-20 transition ease-in-out duration-0">
      <button class="md:hidden" wire:click="$dispatch( '{{ $sideNav === false}}' ? 'toggle-side-nav' : '')">
        <span class="iconify text-blue-500 font-bold text-4xl" data-icon="ion:menu"></span>
      </button>
      <form class="self-end w-fit ml-auto">
        <select name="session" id="session" class="pl-2 pr-12 md:pr-24 py-2 border text-left">
          <option value="{{ NULL }}" disabled>Select a session</option>
          @foreach ($sessions as $item)
          <option value="{{ $item['id'] }}">{{ $item['title'] }}</option>
          @endforeach
        </select>
      </form>
  </nav>