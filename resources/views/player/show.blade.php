@extends('layout.default')

@section('content')
    <div class="p-10 xl:p-20">
        <aside class="fixed bottom-0 left-20 top-16 hidden w-96 overflow-y-auto border-r border-gray-200 px-4 py-6 sm:px-6 lg:px-8 xl:block">
            <livewire:player.player-details :player="$player" />
        </aside>
        <main class="xl:pl-96 space-y-24">

            <!-- Tabs -->
            <div
                x-data="{
                    selectedId: null,
                    init() {
                        // Set the first available tab on the page on page load.
                        this.$nextTick(() => this.select(this.$id('tab', 1)))
                    },
                    select(id) {
                        this.selectedId = id
                    },
                    isSelected(id) {
                        return this.selectedId === id
                    },
                    whichChild(el, parent) {
                        return Array.from(parent.children).indexOf(el) + 1
                    }
                }"
                x-id="['tab']"
                class="mx-10"
            >
                <!-- Tab List -->
                <ul
                    x-ref="tablist"
                    @keydown.right.prevent.stop="$focus.wrap().next()"
                    @keydown.home.prevent.stop="$focus.first()"
                    @keydown.page-up.prevent.stop="$focus.first()"
                    @keydown.left.prevent.stop="$focus.wrap().prev()"
                    @keydown.end.prevent.stop="$focus.last()"
                    @keydown.page-down.prevent.stop="$focus.last()"
                    role="tablist"
                    class="-mb-px flex items-stretch"
                >
                    <!-- Tab -->
                    <li>
                        <button
                            :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
                            @click="select($el.id)"
                            @mousedown.prevent
                            @focus="select($el.id)"
                            type="button"
                            :tabindex="isSelected($el.id) ? 0 : -1"
                            :aria-selected="isSelected($el.id)"
                            :class="isSelected($el.id) ? 'border-gray-200 bg-white' : 'border-transparent'"
                            class="inline-flex rounded-t-md border-t border-l border-r px-5 py-2.5"
                            role="tab"
                        >Hitting</button>
                    </li>

                    <li>
                        <button
                            :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
                            @click="select($el.id)"
                            @mousedown.prevent
                            @focus="select($el.id)"
                            type="button"
                            :tabindex="isSelected($el.id) ? 0 : -1"
                            :aria-selected="isSelected($el.id)"
                            :class="isSelected($el.id) ? 'border-gray-200 bg-white' : 'border-transparent'"
                            class="inline-flex rounded-t-md border-t border-l border-r px-5 py-2.5"
                            role="tab"
                        >Pitching</button>
                    </li>
                </ul>

                <!-- Panels -->
                <div role="tabpanels" class="rounded-b-md border border-gray-200 bg-white">
                    <!-- Panel -->
                    <section
                        x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
                        :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
                        role="tabpanel"
                        class="p-8"
                    >
                        <livewire:hitting-stats-table :player="$player" />
                    </section>

                    <section
                        x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
                        :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
                        role="tabpanel"
                        class="p-8"
                    >
                        <livewire:player.pitching-stats-table :player="$player" />
                    </section>
                </div>
            </div>
        </main>
    </div>
@endsection
