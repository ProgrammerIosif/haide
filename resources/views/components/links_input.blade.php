@props(['values' => []])

<div id="links-input-group" class="mb-2">
    <label class="font-medium text-sm sm:text-base lg:text-xl" for="links[]">Useful links</label>
    @foreach ($values as $value)
        <div class="link-input">
            <div class="flex my-2">
                <input 
                    type="url" 
                    name="links[]" 
                    value="{{ $value }}"
                    class="rounded-md shadow-sm block border-0 bg-transparent py-1 px-2 lg:text-lg grow
                        ring-1 ring-inset ring-[#ebdbb2] focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#98971a] outline-none">
                <x-anchor tag="button" type="button" class="remove-link-btn" colors="primary" size="small">X</x-anchor>
            </div>
            @error('links.' . $loop->index)
                <p class="text-sm text-[#cc241d] font-bold">The field must be a link.</p>
            @enderror
        </div>
    @endforeach
</div>
<x-anchor tag="button" type="button" id="add-link-btn" colors="secondary" size="small">Add Link</x-anchor>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const linkContainer = document.getElementById('links-input-group');
        const addLinkButton = document.getElementById('add-link-btn');

        function createNewLink() {
            const newLinkDiv = document.createElement('div');
            newLinkDiv.classList.add('link-input', 'flex', 'my-2');
            newLinkDiv.innerHTML = `
                <input 
                    type="url" 
                    name="links[]" 
                    class="rounded-md shadow-sm block border-0 bg-transparent py-1 px-2 lg:text-lg grow
                        ring-1 ring-inset ring-[#ebdbb2] focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#98971a] outline-none">
                <x-anchor tag="button" type="button" class="remove-link-btn" colors="primary" size="small">X</x-anchor>
            `;
            linkContainer.appendChild(newLinkDiv);
            newLinkDiv.querySelector('.remove-link-btn').addEventListener('click', function() {
                newLinkDiv.remove();
            });
        }

        addLinkButton.addEventListener('click', function() {
            createNewLink();
        });

        document.querySelectorAll('.remove-link-btn').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('.link-input').remove();
            });
        });
    });
</script>