@extends('template.dashboard')

@section('content')
    <div class="flex flex-col h-full">
        <div class="flex flex-row gap-8">
            <div class="w-1/2 flex flex-col gap-5">
                <div class="h-40 flex items-center justify-between rounded-xl bg-white shadow p-6">
                    <div>
                        <p class="text-2xl font-semibold">
                            Check In
                        </p>
                        <p class="text-slate-400">Batas waktu check In jam 08.00 WIB, toleransi 20 menit</p>
                    </div>
                    <p class="text-2xl font-semibold">08.02</p>
                </div>
                <div class="h-40 flex items-center justify-between rounded-xl bg-white shadow p-6">
                    <div>
                        <p class="text-2xl font-semibold">
                            Check Out
                        </p>
                        <p class="text-slate-400">Batas waktu check out jam 18.00 WIB</p>
                    </div>
                    <p class="text-2xl font-semibold">19.32</p>
                </div>
            </div>
            <div class="flex-1 flex-col gap-5">
                <div class="flex flex-row mb-5 gap-5">
                    <select class="w-90 p-3 bg-white rounded-xl shadow" name="date" id="date">
                        <option selected>Pilih Bulan</option>
                    </select>
                    <button
                        class="flex-1 p-3 bg-blue-400 rounded-xl text-white shadow
                    hover:bg-blue-600 transition-all duration-300 ease-in-out">Select</button>
                    <button
                        class="flex-1 p-3 bg-emerald-400 rounded-xl text-white shadow
                    hover:bg-emerald-600 transition-all duration-300 ease-in-out">Check
                        In</button>
                </div>
                <div class="h-screen flex-1 overflow-y-auto min-h-0 space-y-4 custom-scroll">
                    @for ($i = 1; $i <= 20; $i++)
                        <div class="w-full flex justify-between items-center rounded-xl bg-white shadow p-5">
                            <div>
                                <p class="text-xl font-semibold">
                                    Tanggal, 28 Desember 2025
                                </p>
                                <p class="text-slate-400 text-xs">
                                    Status Check In Toleransi, Status Check Out Tepat Waktu
                                </p>
                            </div>

                            <div class="text-end">
                                <p class="text-red-400 text-xs">
                                    08.18 (Check In)
                                </p>
                                <p class="text-emerald-400 text-xs">
                                    19.32 (Check Out)
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
