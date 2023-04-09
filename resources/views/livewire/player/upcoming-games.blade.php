<div class="px-4 sm:px-6 lg:px-8">
    <div class="mt-4 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                    <tr>
                        <th scope="col" class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Date</th>
                        <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Tournament</th>
                        <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Location</th>
                        <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Opponent</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach($games as $game)
                        <tr>
                            <td class="whitespace-nowrap py-2 pl-0 pr-2 text-sm text-gray-500">
                                {{ $game->date->format('F d, Y') }}
                                <span class="block">{{ $game->time->format('g:i A') }}</span>
                            </td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $game->tournament->name ?? '-' }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                @if($game->city)
                                    {{ $game->city }}, {{ $game->state }}
                                @else
                                    {{ __('-') }}
                                @endif
                            </td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $game->opponent_name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
