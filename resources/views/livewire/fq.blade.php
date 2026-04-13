<div class="w-full grid grid-cols-2 gap-3 max-w-6xl my-4 mx-auto">
    <div class="w-full col-span-1">
        <h1 class="">Frequently Asked Questions</h1>
    </div>
    <div class="col-span-2 w-full flex flex-col items-start">
        @foreach ($this->faqs as $idx=>$faq)
            <div wire:key="{{ $idx }}" class="w-full flex justify-between">
                <p>{{ $faq["question"] }}</p>
                <i>∨</i>
            </div>
        @endforeach
    </div>
</div>
