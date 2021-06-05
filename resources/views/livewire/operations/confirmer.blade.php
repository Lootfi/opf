<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    @if(@isset($citoyens))
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Information sur les Propriétaires
        </h3>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        @foreach ($citoyens as $key => $citoyen)
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Propriétaire #{{$key+1}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$citoyen->user->name}}
                </dd>
            </div>
        </dl>
        @endforeach
    </div>
    @else
    <div class="flex justify-center">
        <i class="fas fa-circle-notch fa-spin fa-5x"></i>
    </div>
    @endif
</div>
