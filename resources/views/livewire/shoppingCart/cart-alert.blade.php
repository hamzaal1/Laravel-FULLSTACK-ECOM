<div id="alert-additional-content-3"
    class="{{ $cartAlertName ? '' : 'hidden' }} w-1/3 z-50 fixed bottom-6 right-4 p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50"
    role="alert">
    <div class="flex items-center">
        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <h3 class="text-lg font-medium">This is a success alert {{ $cartAlertName ? $cartAlertName : 'no' }}</h3>
    </div>
    <div class="mt-2 mb-4 text-sm">
        More info about this info success goes here. This example text is going to run a bit longer so that you can see
        how spacing within an alert works with this kind of content.
    </div>
    <div class="flex">
        <button type="button"
            class="text-white bg-green-800 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center">
            <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                <path fill-rule="evenodd"
                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                    clip-rule="evenodd"></path>
            </svg>
            View more
        </button>
        <button type="button"
            class="text-green-800 bg-transparent border border-green-800 hover:bg-green-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center"
            data-dismiss-target="#alert-additional-content-3" aria-label="Close">
            Dismiss
        </button>
    </div>
</div>