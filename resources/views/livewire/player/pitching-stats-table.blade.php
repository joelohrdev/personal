<div class="md:px-4 sm:px-6 lg:px-8">
    <div class="mt-4 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                    <tr>
                        <th scope="col" class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Date</th>
                        <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">AB</th>
                        <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">R</th>
                        <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">H</th>
                        <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">BB</th>
                        <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">SO</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach($pitchingStats as $pitchingStat)
                        <tr>
                            <td class="whitespace-nowrap py-2 pl-0 pr-2 text-sm text-gray-500">{{ $pitchingStat->game->date->format('F d, Y') }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $pitchingStat->player_pitch_ab ?? '-' }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $pitchingStat->player_pitch_r ?? '-' }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $pitchingStat->player_pitch_h ?? '-' }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $pitchingStat->player_pitch_bb ?? '-' }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $pitchingStat->player_pitch_so ?? '-' }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
