@if (flash()->message)
    <div class="rounded-md {{ flash()->class('background') }} p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                @svg(flash()->icon('name'), flash()->class('class'), flash()->class('attributes'))
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium {{ flash()->class('title') }}">
                    {{ flash()->title }}
                </h3>
                <div class="mt-2 text-sm {{ flash()->class('body') }}">
                    <p>{{ flash()->message }}</p>
                </div>
            </div>
        </div>
    </div>
@endif
