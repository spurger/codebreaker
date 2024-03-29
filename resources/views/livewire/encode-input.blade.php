<div class="rounded border border-sky-300 bg-sky-100 p-5">
    <div class="flex items-center gap-4">
        <h3 class="text font-medium uppercase tracking-wide text-sky-700">
            Table
        </h3>
        <button class="btn btn--small" wire:click="shuffleCodeTable">Shuffle</button>
    </div>
    <div class="mt-3 inline-grid grid-cols-4 gap-4">
        @foreach ($codeTable as $code => $value)
            <pre>{{ $code }}: {{ $value }}</pre>
        @endforeach
    </div>
    <form wire:submit="encode" class="mt-3">
        <label for="encoder-input" class="font-medium text-gray-600">Input</label>
        <input wire:model="input" id="encoder-input" class="form-input mt-1 block"
            placeholder="Enter your text here...">

        <div class="mt-4">
            <button type="submit" class="btn">
                Encode
            </button>
        </div>
    </form>
    @if ($output)
        <div class="mt-4">
            <pre>{{ html_entity_decode($output) }}</pre>
        </div>
    @endif
</div>
