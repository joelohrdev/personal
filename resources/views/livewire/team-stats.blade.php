<div class="px-10">
    <dl class="grid grid-cols-1 gap-5 sm:grid-cols-3">
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Team Average</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $avg }}</dd>
        </div>
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Games Played</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $gameTotalCount }}</dd>
        </div>
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Total Runs</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $runsScored }}</dd>
        </div>
    </dl>
</div>
