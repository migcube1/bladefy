<div class="table-responsive">
    <table id="{{ $id }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'table']) }}>
        {{ $slot }}
    </table>
</div>
