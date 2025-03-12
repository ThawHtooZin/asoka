<x-layout>
    <div class="max-w-6xl mx-auto mt-12 mb-12 grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Donation Information -->
        <div class="p-8 bg-gray-100 shadow-md rounded-2xl border border-gray-300">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Why Your Donation Matters</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                Your generosity supports our mission to spread wisdom and compassion through education and community outreach. Every donation goes towards:
            </p>
            <ul class="mt-4 text-lg text-gray-700 list-disc pl-5 space-y-2" style="margin-left: 30px;">
                <li>Providing free learning materials</li>
                <li>Supporting instructors and monks</li>
                <li>Organizing meditation and teaching sessions</li>
                <li>Maintaining community centers and temples</li>
            </ul>
    
            <div class="mt-8 bg-gray-50 p-6 rounded-xl shadow-lg border border-gray-300">
                <div class="flex items-center gap-3 mb-4">
                    <svg class="w-8 h-8 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M5 6h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2-2 0 012-2z" />
                    </svg>
                    <h3 class="text-2xl font-semibold text-gray-900">Bank Transfer & E-Wallets</h3>
                </div>
            
                <!-- Bank Transfer Details -->
                <div class="space-y-3">
                    <div class="flex justify-between text-lg text-gray-800">
                        <span class="font-medium">Bank Name:</span> 
                        <span class="text-gray-600">ABC Bank</span>
                    </div>
                    <div class="flex justify-between text-lg text-gray-800">
                        <span class="font-medium">Account Number:</span> 
                        <span class="text-gray-600">1234 5678 90</span>
                    </div>
                    <div class="flex justify-between text-lg text-gray-800">
                        <span class="font-medium">Account Name:</span> 
                        <span class="text-gray-600">Wisdom Foundation</span>
                    </div>
                    <div class="flex justify-between text-lg text-gray-800">
                        <span class="font-medium">SWIFT Code:</span> 
                        <span class="text-gray-600">ABCD1234</span>
                    </div>
                </div>
            
                <!-- Payment Options -->
                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">E-Wallet Payment Options</h3>
                    <div class="flex items-center gap-4">
                        <div class="p-3 bg-white rounded-lg shadow border">
                            <img src="/images/payments/wavepay.jpg" alt="Wave Money" class="w-20 h-auto" />
                        </div>
                        <div class="p-3 bg-white rounded-lg shadow border">
                            <img src="/images/payments/kpay.jpg" alt="KBZ Pay" class="w-20 h-auto" />
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>

        <!-- Donation Form -->
        <div id="donation-section" class="p-8 bg-white shadow-2xl rounded-2xl border border-gray-200">
            <h1 class="text-3xl font-bold text-center text-gray-900 mb-6 tracking-wide uppercase">Make an Impact Today</h1>
            <p class="text-lg text-gray-700 text-center mb-8 italic">Your donation helps us continue spreading wisdom and compassion.</p>
    
            <form action="/donate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-8 p-6 bg-gray-50 rounded-lg shadow-md border border-gray-300">
                    <!-- Donate Amount -->
                    <div class="mb-4">
                        <h4 class="text-2xl font-semibold text-gray-800 mb-4 mt-5">Donate Amount</h4>
                        <input type="number" name="amount" placeholder="Enter amount" class="w-full px-5 py-3 border rounded-lg text-lg" required />
                    </div>
            
                    <!-- Donate To -->
                    <h4 class="text-2xl font-semibold text-gray-800 mb-4 mt-8">Donate To</h4>
                    <select name="donate_to" class="w-full px-5 py-3 border rounded-lg text-lg chosen-select" required>
                        <option value="">Please Select</option>
                        <option value="person 1">Person 1</option>
                        <option value="person 2">Person 2</option>
                        <option value="person 3">Person 3</option>
                    </select>
                    
            
                    <!-- Upload Proof of Payment -->
                    <div class="mt-6">
                        <h4 class="text-2xl font-semibold text-gray-800 mb-4 mt-8">Upload Proof of Payment</h4>
                        <input type="file" name="payment_img" accept="image/*" class="w-full px-5 py-3 border rounded-lg text-lg" required />
                    </div>
                    @if ($errors->has('payment_img'))
                        <div class="text-red-500 text-sm">
                            {{ $errors->first('payment_img') }}
                        </div>
                    @endif
                
                    <button type="submit" class="mt-5 w-full py-3 text-white font-semibold rounded-lg hover:bg-green-800 transition duration-200" style="background-color: #16a34a;">Submit Donation</button>
                </div>
            </form>            
        </div>
    </div>
    
</x-layout>