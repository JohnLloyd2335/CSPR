<div>

    <main>
        <div class="header">
            <div class="left">
                <h1>Costumer Segmentation</h1>
                <!-- <ul class="breadcrumb">
                    <li><a href="#">
                            Analytics
                        </a></li>
                    /
                    <li><a href="#" class="active">Shop</a></li>
                </ul> -->
            </div>
            <!-- <a href="#" class="report">
                <i class='bx bx-cloud-download'></i>
                <span>Download CSV</span>
            </a> -->
        </div>
        <!-- Analyses -->
        <div class="analyse">
            <div class="sales">
                <div class="status">
                    <div class="info">
                        <h3>Loyal Regulars</h3>
                        <h1>{{ $loyal_regulars_count }}</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>{{ $loyal_regulars_percentage }}%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="visits">
                <div class="status">
                    <div class="info">
                        <h3>Frequent Spenders</h3>
                        <h1>{{ $frequent_spenders_count }}</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>{{ $frequent_spenders_percentage }}%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Recs">
                <div class="status">
                    <div class="info">
                        <h3>Exclusive Elite</h3>
                        <h1>{{ $exclusive_elite_count }}</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>{{ $exclusive_elite_percentage }}%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="searches">
                <div class="status">
                    <div class="info">
                        <h3>Ocassional Shoppers</h3>
                        <h1>{{ $occasional_shoppers_count }}</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>{{ $occasional_shoppers_percentage }}%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="date-filter">
            <form>
                <label for="start-date" style="color: white;">Start Date:</label>
                <input type="date" id="start-date" name="start-date">
                <label for="end-date" style="color: white;">End Date:</label>
                <input type="date" id="end-date" name="end-date">
                <button type="button">Find</button>
            </form>
        </div> --}}


        <div class="data-container">
            <div class="manage-sale">
                <div class="button-container">
                    <button wire:click="CsvExport">CSV</button>
                    <button wire:click="XlsxExport">Excel</button>
                </div>
                <div class="button-container middle-buttons">

                </div>
                <div class="button-container">
                    <button wire:click="filterRecords('all')">All</button>
                    <button wire:click="filterRecords('Loyal Regulars')">Loyal Regulars</button>
                    <button wire:click="filterRecords('Frequent Spenders')">Frequent Spenders</button>
                    <button wire:click="filterRecords('Exclusive Elite')">Exclusive Elite</button>
                    <button wire:click="filterRecords('Occasional Shoppers')">Occasional Shoppers</button>
                </div>

            </div>

            <div class="table-container">
                <!-- Table -->
                <table>
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Recency</th>
                            <th>Frequency</th>
                            <th>Monetary</th>
                            <th>Labels</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->customer_id }}</td>
                                <td>{{ $customer->regency }}</td>
                                <td>{{ $customer->frequency }}</td>
                                <td>{{ $customer->monetary }}</td>
                                <td>{{ $customer->labels }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>


                <style>
                    .pagination {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        text-align: center;
                        list-style: none;
                        padding: 0;
                        margin: 70px 300px 20px 300px;

                    }

                    .page-item {
                        margin: 0 5px;
                    }

                    .page-link {
                        display: inline-block;
                        padding: 8px 12px;
                        background-color: #3498db;
                        color: #fff;
                        border: 1px solid #3498db;
                        border-radius: 4px;
                        cursor: pointer;
                    }

                    .page-link:hover {
                        background-color: #2980b9;
                        border-color: #2980b9;
                    }

                    .page-item.active .page-link {
                        background-color: #2980b9;
                        border-color: #2980b9;
                    }

                    .page-item.disabled .page-link {
                        background-color: #ddd;
                        border-color: #ddd;
                        cursor: not-allowed;
                    }
                </style>

                <div class="my-5 pagiantion-container">
                    {{ $customers->links() }}
                </div>

            </div>
        </div>


    </main>


</div>
