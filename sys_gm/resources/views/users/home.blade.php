<x-layouts.index :title="__('Home')">

    <div class="container mb-4">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="#" icon="home" />
            <flux:breadcrumbs.item icon="ellipsis-horizontal" />
            <flux:breadcrumbs.item>Post</flux:breadcrumbs.item>
        </flux:breadcrumbs>
    </div>

    <div class="container mb-4">
        <flux:heading size="xl" level="1">Good afternoon, Olivia</flux:heading>
    </div>

    <div class="container mb-4">
        <flux:heading size="xl" level="1">Tableau</flux:heading>
    </div>
    
    <div class="container mb-4">
        <flux:heading size="xl" level="1">Formulaire</flux:heading>
        <div class="mx-auto p-6">
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-800">New Proposal</h2>
                <p class="text-gray-600">Create a new business proposal</p>
            </div>
    
            <form class="space-y-8">
                <!-- Subject -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Subject <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Website design and development proposal"
                    >
                </div>
    
                <!-- To (Recipients) -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        To <span class="text-red-500">*</span>
                    </label>
                    <div class="flex flex-wrap gap-2 p-2 border border-gray-300 rounded-lg">
                        <div class="flex items-center bg-gray-100 px-3 py-1 rounded-full text-sm">
                            <img src="https://ui-avatars.com/api/?name=John+Doe" class="w-5 h-5 rounded-full mr-2">
                            green.cutte@outlook.com
                            <button class="ml-2 text-gray-500 hover:text-gray-700">×</button>
                        </div>
                        <input
                            type="text"
                            class="flex-1 min-w-[200px] outline-none"
                            placeholder="Add recipient..."
                        >
                    </div>
                </div>
    
                <!-- Related and Lead -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Related <span class="text-red-500">*</span>
                        </label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option>Lead</option>
                            <option>Customer</option>
                            <option>Project</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Lead <span class="text-red-500">*</span>
                        </label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option>Alexandra Della - Website design and development</option>
                        </select>
                    </div>
                </div>
    
                <!-- Contact Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            value="green.cutte@outlook.com"
                        >
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Phone <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="tel"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            value="+1 (375) 9632 458"
                        >
                    </div>
                </div>
    
                <!-- Address -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Address <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        value="P.O. Box 18728"
                    >
                </div>
    
                <!-- Location Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Country <span class="text-red-500">*</span>
                        </label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option>United States</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            State
                        </label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option>Alaska</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            City
                        </label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option>King Cove</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Timezone
                        </label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option>(GMT) Western Europe Time</option>
                        </select>
                    </div>
                </div>
    
                <!-- Form Actions -->
                <div class="flex justify-end gap-4">
                    <button type="button" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                        Save & Send
                    </button>
                    <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
    

    {{-- <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div> --}}

</x-layouts.index>
