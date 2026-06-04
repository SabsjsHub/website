@extends('layouts.app')

@section('title', 'विहारचर्या | SABSJS')

@section('content')
    <div class="max-w-[1400px] w-full mx-auto px-4 py-10" x-data="vihaarcharyaData()">
        <!-- 🏷️ Page Heading -->
        <div class="relative text-center mt-1 mb-6">
            <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
            <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center 
                           text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
                विहारचर्या
            </h2>
        </div>

        <!-- 🔻 Embedded API Content via Alpine.js -->
        <div class="w-full mx-auto bg-white border border-gray-200 shadow rounded-sm" style="min-height: 400px;">
            <!-- Controls -->
            <div class="p-3 border-b border-gray-200 flex flex-wrap items-center justify-between gap-3 bg-gray-50">
                <div class="flex flex-wrap items-center gap-2">
                    <input type="date" x-model="selectedDate" @change="applyFilters()"
                        class="border border-gray-400 rounded-sm px-3 py-1.5 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    <button @click="filterByDate()"
                        class="bg-[#337ab7] hover:bg-blue-700 text-white px-4 py-1.5 rounded-sm text-sm transition-colors">View
                        by date</button>
                    <button @click="setYesterday()"
                        class="bg-[#337ab7] hover:bg-blue-700 text-white px-4 py-1.5 rounded-sm text-sm transition-colors">Yesterday</button>
                    <button @click="setToday()"
                        class="bg-[#337ab7] hover:bg-blue-700 text-white px-4 py-1.5 rounded-sm text-sm transition-colors">Today</button>
                </div>
                <div class="flex items-center max-w-full">
                    <div class="relative w-full sm:w-72">
                        <input type="text" x-model="searchQuery" @input="applyFilters()" placeholder="Search by Name..."
                            class="w-full border border-gray-400 rounded-sm pl-8 pr-3 py-1.5 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
                        <i class="fas fa-search absolute left-2.5 top-[9px] text-gray-400 text-sm"></i>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-800 border-collapse">
                    <thead>
                        <tr class="bg-white border-b border-gray-300">
                            <th class="p-3 font-semibold border-r border-gray-200 w-16 align-top">क्रम संख्या</th>
                            <th class="p-3 font-semibold border-r border-gray-200 min-w-[200px] align-top">चारित्रात्माओं के
                                नाम</th>
                            <th class="p-3 font-semibold border-r border-gray-200 whitespace-nowrap align-top">ठाणा</th>
                            <th class="p-3 font-semibold border-r border-gray-200 min-w-[120px] align-top">विहार कहाँ से
                            </th>
                            <th class="p-3 font-semibold border-r border-gray-200 min-w-[130px] align-top">विहार कहाँ तक
                            </th>
                            <th class="p-3 font-semibold border-r border-gray-200 whitespace-nowrap align-top">किमी</th>
                            <th class="p-3 font-semibold border-r border-gray-200 min-w-[180px] align-top">विराजने का स्थान
                            </th>
                            <th class="p-3 font-semibold border-r border-gray-200 min-w-[130px] align-top">विहारकर्मी</th>
                            <th class="p-3 font-semibold min-w-[150px] align-top">सक्रिय व्यक्ति</th>
                        </tr>
                    </thead>
                    <tbody class="align-top">
                        <template x-for="(item, index) in filteredData" :key="index">
                            <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                <td class="p-3 border-r border-gray-200" x-text="index + 1"></td>
                                <td class="p-3 border-r border-gray-200">
                                    <div class="text-gray-900" x-text="item.main_sant"></div>
                                    <template x-if="item.additional_sants && item.additional_sants.length > 0">
                                        <div class="mt-2 text-gray-700 space-y-0.5" style="white-space: pre-wrap;">
                                            <template x-for="(sant, sIdx) in item.additional_sants" :key="sIdx">
                                                <div x-text="sant.full_name"></div>
                                            </template>
                                        </div>
                                    </template>
                                </td>
                                <td class="p-3 border-r border-gray-200 whitespace-nowrap text-gray-700">
                                    <span
                                        x-text="'ठाणा - ' + (item.thana_count || (item.additional_sants ? item.additional_sants.length + 1 : item.snum) || '')"></span>
                                </td>
                                <td class="p-3 border-r border-gray-200 text-gray-700" x-text="item.from_city"></td>
                                <td class="p-3 border-r border-gray-200 text-gray-700">
                                    <span x-text="item.to_city"></span>
                                    <div class="mt-2 text-left">
                                        <button
                                            class="bg-[#5bc0de] hover:bg-[#31b0d5] text-white text-xs px-2.5 py-1.5 rounded-sm inline-block whitespace-nowrap shadow-sm"
                                            @click="openRouteMap(item)">Show Route Map</button>
                                    </div>
                                </td>
                                <td class="p-3 border-r border-gray-200 text-gray-700 whitespace-nowrap"
                                    x-text="item.km + 'km'"></td>
                                <td class="p-3 border-r border-gray-200 text-gray-700">
                                    <span x-text="item.place"></span>
                                    <template x-if="item.date_formatted">
                                        <span> (<span x-text="item.date_formatted"></span>)</span>
                                    </template>
                                </td>
                                <td class="p-3 border-r border-gray-200 text-gray-700">
                                    <template x-if="item.viharkarmi && item.viharkarmi.length > 0">
                                        <div class="space-y-2">
                                            <template x-for="(vk, vIdx) in item.viharkarmi" :key="vIdx">
                                                <div>
                                                    <span x-text="vk.name"></span><br>
                                                    <span x-text="vk.mobile"></span>
                                                </div>
                                            </template>
                                        </div>
                                    </template>
                                </td>
                                <td class="p-3 text-gray-700 whitespace-pre-line" x-text="item.active_person"></td>
                            </tr>
                        </template>
                        <tr x-show="filteredData.length === 0 && !isLoading" x-cloak>
                            <td colspan="9" class="p-8 text-center text-gray-500 font-medium">No data found matching your filters.</td>
                        </tr>
                        <tr x-show="isLoading" x-cloak>
                            <td colspan="9" class="p-8 text-center text-gray-500 font-medium whitespace-nowrap">
                                <i class="fas fa-spinner fa-spin mr-2"></i> Loading data...
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('vihaarcharyaData', () => ({
                allData: [],
                filteredData: [],
                isLoading: true,
                selectedDate: '',
                searchQuery: '',

                async init() {
                    try {
                        const response = await fetch('/api/vihar-data');
                        const json = await response.json();
                        if (json.success && json.data) {
                            this.allData = json.data;
                            this.filteredData = this.allData;
                        }
                    } catch (error) {
                        console.error('Error fetching vihar data:', error);
                    } finally {
                        this.isLoading = false;
                    }
                },

                formatDateForInput(dateObj) {
                    const year = dateObj.getFullYear();
                    const month = String(dateObj.getMonth() + 1).padStart(2, '0');
                    const day = String(dateObj.getDate()).padStart(2, '0');
                    return `${year}-${month}-${day}`;
                },

                applyFilters() {
                    let filtered = this.allData;
                    
                    if (this.selectedDate) {
                        filtered = filtered.filter(item => item.date === this.selectedDate);
                    }
                    
                    if (this.searchQuery && this.searchQuery.trim() !== '') {
                        const query = this.searchQuery.trim().toLowerCase();
                        filtered = filtered.filter(item => {
                            let matchMain = item.main_sant && item.main_sant.toLowerCase().includes(query);
                            let matchAdd = false;
                            if (item.additional_sants && item.additional_sants.length > 0) {
                                matchAdd = item.additional_sants.some(sant => 
                                    sant.full_name && sant.full_name.toLowerCase().includes(query)
                                );
                            }
                            return matchMain || matchAdd;
                        });
                    }
                    
                    this.filteredData = filtered;
                },

                filterByDate() {
                    this.applyFilters();
                },

                setYesterday() {
                    const date = new Date();
                    date.setDate(date.getDate() - 1);
                    this.selectedDate = this.formatDateForInput(date);
                    this.applyFilters();
                },

                setToday() {
                    const date = new Date();
                    this.selectedDate = this.formatDateForInput(date);
                    this.applyFilters();
                },

                openRouteMap(item) {
                    if (item.from_lat && item.from_long && item.to_lat && item.to_long) {
                        const url = `https://www.google.com/maps/dir/?api=1&origin=${item.from_lat},${item.from_long}&destination=${item.to_lat},${item.to_long}`;
                        window.open(url, '_blank');
                    } else if (item.from_city && item.to_city) {
                        const url = `https://www.google.com/maps/dir/?api=1&origin=${encodeURIComponent(item.from_city)}&destination=${encodeURIComponent(item.to_city)}`;
                        window.open(url, '_blank');
                    } else {
                        alert('Route coordinates not found.');
                    }
                }
            }));
        });
    </script>
@endsection