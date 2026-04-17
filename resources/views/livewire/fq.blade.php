<div class="w-full grid grid-cols-2 gap-3 max-w-6xl my-4 mx-auto">
    <div class="w-full flex justify-center items-center">
        <h1 class="lg:text-6xl md:text-4xl text-xl">Frequently Asked Questions</h1>
    </div>
    <div class="w-full flex flex-col items-start gap-4">
        @foreach ($this->faqs as $idx=>$faq)
            <div wire:key="{{ $idx }}" class="w-full flex flex-col gap-2">
                <div class="w-full flex justify-between">
                <p>{{ $faq["question"] }}</p>
                <i wire:click="toggle({{ $idx }})" class="text-xl font-bold hover:cursor-pointer">∨</i>
                </div>
                @if ($idx === $this->questionIndex)
                    <p>{{ $faq["answer"] }}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
