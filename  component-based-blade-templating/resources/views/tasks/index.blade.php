<x-layout>
    <h2>This is from Tasks</h2>
    <p>
        <x-button>Click Me</x-button>
    </p>
    <p class="mt-4">
        <x-button>
            <em>This is Awesome</em>
        </x-button>
    </p>
    <p class="mt-4">
        <x-buttonx color="red" onclick="log()" title="Click Here"/> <br/>
        <x-buttonx color="red" onclick="log()" :title="$message"/> <br/>
        <x-buttonx color="blue" disabled onclick="logx()" title="Click Here"/> <br/>
        <x-buttonx color="green" onclick="logx()" title="Click Here"/> <br/>
        <x-buttonx color="yellow" title="Click Here"/> <br/>
    </p>
    <p>
        <x-alert>This is a success message</x-alert><br/>
        <x-alert type="warning">This is a warning message</x-alert><br/>
        <x-alert type="error">This is a warning message</x-alert><br/>
        <x-alert type="info">This is a warning message</x-alert><br/>
    </p>

    <p>
        <x-table :columns="$columns" :data="$data"></x-table>
    </p>
    <script>
        function log(){
            console.log("Clicked")
        }

        function logx(){
            console.log("WOW! Clicked")
        }
    </script>
</x-layout>
