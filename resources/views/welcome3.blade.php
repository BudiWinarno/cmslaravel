<?php
    $judul = "variable judul"
?>
<x-halaman-layout :title="$judul">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias, modi.</p>

    <x-slot name="tanggal">17 Agustus 2024</x-slot>
    <x-slot name="penulis">Joko Mulyono</x-slot>

</x-halaman-layout>