<div class="rounded border border-sky-300 bg-sky-100 p-5">
    <form wire:submit="encode">
        <label for="encoder-input" class="font-medium text-gray-600">Input</label>
        <input wire:model="input" id="encoder-input" class="form-input mt-1 block" placeholder="Enter your text here...">

        <div class="mt-4">
            <button type="submit"
                class="rounded bg-sky-600 px-4 py-2 text-white transition hover:bg-sky-500 focus-visible:bg-sky-500">
                Encode
            </button>
        </div>
    </form>
    @if ($output)
        <div class="mt-4">
            <span class="font-semibold">Output</span>:
            {{ $output }}
        </div>
    @endif
</div>
