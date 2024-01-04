<div class="accordion" id="{{ $id }}">
    @foreach ($items as $item)
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button {{ !$loop->first ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $loop->index }}">
                    {{ $item['title'] }}
                </button>
            </h2>
            <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#{{ $id }}">
                <div class="accordion-body">
                    {{ $item['content'] }}
                </div>
            </div>
        </div>
    @endforeach
</div>
