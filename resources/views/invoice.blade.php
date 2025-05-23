<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEMS - Invoice</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-sm py-4 px-6 flex justify-between items-center">
        <!-- Logo and Tagline -->
        <div class="flex items-center">
            <div class="mr-2">
                <img src="https://placehold.co/60x60/777/fff?text=HEMS" alt="HEMS Logo"
                    class="h-14 transform -rotate-12">
            </div>
            <div>
                <h1 class="font-bold text-xl">HEMS</h1>
                <p class="text-sm">Bringing events to life!</p>
            </div>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="#" class="text-lg">Explore</a>
            <a href="#" class="text-lg">Favourite</a>
            <a href="#" class="text-lg">My Tickets</a>
            <a href="#" class="text-lg">Sign In</a>
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                <i class="fas fa-user text-gray-500"></i>
            </div>
        </div>
    </nav>

    <!-- Booking Progress -->
    <div class="container mx-auto px-4 py-6">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">Payment Complete</h1>
            <div class="hidden md:block">
                <ol class="flex items-center">
                    <li class="relative flex items-center text-gray-500">
                        <span class="h-8 w-8 rounded-full bg-blue-600 text-white flex items-center justify-center mr-2">
                            <i class="fas fa-check text-sm"></i>
                        </span>
                        <span>Select Seats</span>
                        <div class="h-0.5 bg-blue-600 w-12 mx-4"></div>
                    </li>
                    <li class="relative flex items-center text-gray-500">
                        <span class="h-8 w-8 rounded-full bg-blue-600 text-white flex items-center justify-center mr-2">
                            <i class="fas fa-check text-sm"></i>
                        </span>
                        <span>Your Details</span>
                        <div class="h-0.5 bg-blue-600 w-12 mx-4"></div>
                    </li>
                    <li class="relative flex items-center text-gray-500">
                        <span class="h-8 w-8 rounded-full bg-blue-600 text-white flex items-center justify-center mr-2">
                            <i class="fas fa-check text-sm"></i>
                        </span>
                        <span>Payment</span>
                        <div class="h-0.5 bg-blue-600 w-12 mx-4"></div>
                    </li>
                    <li class="relative flex items-center text-blue-600 font-medium">
                        <span class="h-8 w-8 rounded-full bg-blue-600 text-white flex items-center justify-center mr-2">
                            <i class="fas fa-check text-sm"></i>
                        </span>
                        <span>Confirmation</span>
                    </li>
                </ol>
            </div>
        </div>

        <!-- Success Message -->
        <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-8 flex items-center">
            <i class="fas fa-check-circle text-green-500 mr-3 text-xl"></i>
            <div>
                <p class="font-medium text-green-700">Your payment has been successfully processed</p>
                <p class="text-sm text-green-600">Your e-tickets have been sent to your email.</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 pb-12">
        <!-- Invoice Container -->
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden mb-8">
            <!-- Invoice Header -->
            <div class="p-6 border-b border-gray-200">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex items-center mb-4 md:mb-0">
                        <div class="mr-2">
                            <img src="https://placehold.co/60x60/777/fff?text=HEMS" alt="HEMS Logo"
                                class="h-14 transform -rotate-12">
                        </div>
                        <div>
                            <h1 class="font-bold text-xl">HEMS</h1>
                            <p class="text-sm">Bringing events to life!</p>
                        </div>
                    </div>
                    <div class="text-center md:text-right">
                        <h2 class="text-xl font-bold">INVOICE</h2>
                        <p class="text-gray-600">Invoice #: HEMS-20250422-47391</p>
                        <p class="text-gray-600">Date: April 22, 2025</p>
                    </div>
                </div>
            </div>

            <!-- Invoice Body -->
            <div class="p-6">
                <!-- Customer & Event Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Customer Information -->
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 mb-2">BILLED TO</h3>
                        <p class="font-medium">Ahmad Rahimi</p>
                        <p>ahmad.rahimi@example.com</p>
                        <p>+60 12 3456 7890</p>
                    </div>
                    <!-- Event Information -->
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 mb-2">EVENT DETAILS</h3>
                        <p class="font-medium">Music Festival 2025</p>
                        <p>Kuala Lumpur Convention Center</p>
                        <p>May 15, 2025 • 7:30 PM</p>
                        <p>Order ID: ORD-734918</p>
                    </div>
                </div>

                <!-- Items Table -->
                <div class="overflow-x-auto mb-6">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-3 px-4 text-left font-medium">Description</th>
                                <th class="py-3 px-4 text-center font-medium">Quantity</th>
                                <th class="py-3 px-4 text-right font-medium">Unit Price</th>
                                <th class="py-3 px-4 text-right font-medium">Amount</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="py-3 px-4">
                                    <div class="font-medium">VIP Tickets</div>
                                    <div class="text-sm text-gray-600">Seats: A1, A2</div>
                                </td>
                                <td class="py-3 px-4 text-center">2</td>
                                <td class="py-3 px-4 text-right">RM 200.00</td>
                                <td class="py-3 px-4 text-right">RM 400.00</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">
                                    <div class="font-medium">Regular Tickets</div>
                                    <div class="text-sm text-gray-600">Seats: B5, B6</div>
                                </td>
                                <td class="py-3 px-4 text-center">2</td>
                                <td class="py-3 px-4 text-right">RM 95.00</td>
                                <td class="py-3 px-4 text-right">RM 190.00</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">
                                    <div class="font-medium">Booking Fee</div>
                                </td>
                                <td class="py-3 px-4 text-center">1</td>
                                <td class="py-3 px-4 text-right">RM 20.00</td>
                                <td class="py-3 px-4 text-right">RM 20.00</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">
                                    <div class="font-medium">Processing Fee</div>
                                </td>
                                <td class="py-3 px-4 text-center">1</td>
                                <td class="py-3 px-4 text-right">RM 35.00</td>
                                <td class="py-3 px-4 text-right">RM 35.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Total Calculation -->
                <div class="w-full md:w-1/2 ml-auto">
                    <div class="flex justify-between py-2">
                        <span class="font-medium">Subtotal</span>
                        <span>RM 645.00</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="font-medium">Tax (6%)</span>
                        <span>RM 39.00</span>
                    </div>
                    <div class="flex justify-between py-2 border-t border-gray-200 text-lg font-bold">
                        <span>Total</span>
                        <span>RM 684.00</span>
                    </div>
                    <div class="flex justify-between py-2 text-sm text-gray-600">
                        <span>Payment Method</span>
                        <span>BCA Virtual Account</span>
                    </div>
                    <div class="flex justify-between py-2 text-sm text-gray-600">
                        <span>Payment Status</span>
                        <span class="text-green-600 font-medium">PAID</span>
                    </div>
                </div>

                <!-- Notes -->
                <div class="mt-8 border-t border-gray-200 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 mb-2">NOTES</h3>
                    <p class="text-sm text-gray-600 mb-4">
                        Thank you for your purchase. This is an official receipt for your payment.
                        Please keep this for your records.
                    </p>
                    <p class="text-sm text-gray-600">
                        For any inquiries regarding your order, please contact our customer support at
                        <a href="mailto:support@hems.my" class="text-blue-600">support@hems.my</a>
                        or call us at +60 3 9876 5432.
                    </p>
                </div>
            </div>

            <!-- Invoice Footer -->
            <div class="bg-gray-50 p-6 flex flex-col md:flex-row justify-between items-center">
                <div class="text-center md:text-left mb-4 md:mb-0">
                    <p class="text-sm text-gray-600">HEMS Entertainment Sdn Bhd</p>
                    <p class="text-sm text-gray-600">Level 30, Tower 1, Petronas Twin Towers</p>
                    <p class="text-sm text-gray-600">Kuala Lumpur, 50088, Malaysia</p>
                </div>
                <div class="flex flex-col md:flex-row items-center">
                    <button
                        class="mb-3 md:mb-0 md:mr-4 bg-blue-600 text-white py-2 px-6 rounded-lg flex items-center hover:bg-blue-700">
                        <i class="fas fa-download mr-2"></i> Download Invoice
                    </button>
                    <button class="bg-gray-200 text-gray-800 py-2 px-6 rounded-lg flex items-center hover:bg-gray-300">
                        <i class="fas fa-print mr-2"></i> Print
                    </button>
                </div>
            </div>
        </div>

        <!-- E-Tickets Section -->
        <div class="max-w-4xl mx-auto">
            <h2 class="text-xl font-bold mb-6">Your E-Tickets</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Ticket 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden relative">
                    <div class="bg-gradient-to-r from-blue-600 to-purple-600 h-4"></div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-bold text-lg">Music Festival 2025</h3>
                                <p class="text-gray-600 text-sm">VIP Ticket</p>
                            </div>
                            <div class="bg-blue-100 text-blue-800 text-xs font-bold rounded-full px-3 py-1">
                                SEAT A1
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <i class="far fa-calendar-alt text-gray-400 mr-2"></i>
                                <span>May 15, 2025 • 7:30 PM</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 mr-2"></i>
                                <span>Kuala Lumpur Convention Center</span>
                            </div>
                        </div>

                        <div class="flex justify-center mb-4">
                            <img src="https://placehold.co/200x200/777/fff?text=QR+CODE" alt="QR Code"
                                class="h-32">
                        </div>

                        <div class="text-center text-sm text-gray-500">
                            <p>TICKET ID: VIP-A1-47391</p>
                            <p>Ahmad Rahimi • +60 12 3456 7890</p>
                        </div>
                    </div>
                </div>

                <!-- Ticket 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden relative">
                    <div class="bg-gradient-to-r from-blue-600 to-purple-600 h-4"></div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-bold text-lg">Music Festival 2025</h3>
                                <p class="text-gray-600 text-sm">VIP Ticket</p>
                            </div>
                            <div class="bg-blue-100 text-blue-800 text-xs font-bold rounded-full px-3 py-1">
                                SEAT A2
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <i class="far fa-calendar-alt text-gray-400 mr-2"></i>
                                <span>May 15, 2025 • 7:30 PM</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 mr-2"></i>
                                <span>Kuala Lumpur Convention Center</span>
                            </div>
                        </div>

                        <div class="flex justify-center mb-4">
                            <img src="https://placehold.co/200x200/777/fff?text=QR+CODE" alt="QR Code"
                                class="h-32">
                        </div>

                        <div class="text-center text-sm text-gray-500">
                            <p>TICKET ID: VIP-A2-47392</p>
                            <p>Ahmad Rahimi • +60 12 3456 7890</p>
                        </div>
                    </div>
                </div>

                <!-- Ticket 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden relative">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-4"></div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-bold text-lg">Music Festival 2025</h3>
                                <p class="text-gray-600 text-sm">Regular Ticket</p>
                            </div>
                            <div class="bg-blue-100 text-blue-800 text-xs font-bold rounded-full px-3 py-1">
                                SEAT B5
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <i class="far fa-calendar-alt text-gray-400 mr-2"></i>
                                <span>May 15, 2025 • 7:30 PM</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 mr-2"></i>
                                <span>Kuala Lumpur Convention Center</span>
                            </div>
                        </div>

                        <div class="flex justify-center mb-4">
                            <img src="https://placehold.co/200x200/777/fff?text=QR+CODE" alt="QR Code"
                                class="h-32">
                        </div>

                        <div class="text-center text-sm text-gray-500">
                            <p>TICKET ID: REG-B5-47393</p>
                            <p>Ahmad Rahimi • +60 12 3456 7890</p>
                        </div>
                    </div>
                </div>

                <!-- Ticket 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden relative">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-4"></div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-bold text-lg">Music Festival 2025</h3>
                                <p class="text-gray-600 text-sm">Regular Ticket</p>
                            </div>
                            <div class="bg-blue-100 text-blue-800 text-xs font-bold rounded-full px-3 py-1">
                                SEAT B6
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <i class="far fa-calendar-alt text-gray-400 mr-2"></i>
                                <span>May 15, 2025 • 7:30 PM</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 mr-2"></i>
                                <span>Kuala Lumpur Convention Center</span>
                            </div>
                        </div>

                        <div class="flex justify-center mb-4">
                            <img src="https://placehold.co/200x200/777/fff?text=QR+CODE" alt="QR Code"
                                class="h-32">
                        </div>

                        <div class="text-center text-sm text-gray-500">
                            <p>TICKET ID: REG-B6-47394</p>
                            <p>Ahmad Rahimi • +60 12 3456 7890</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <p class="text-gray-600 mb-4">All tickets have been sent to your email address.</p>
                <a href="#" class="text-blue-600 hover:underline">
                    <i class="fas fa-arrow-left mr-1"></i> Return to My Tickets
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-100 py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="font-bold mb-3">About HEMS</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-black">Our Story</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-black">How It Works</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-black">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-3">Help & Support</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-black">FAQ</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-black">Contact Us</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-black">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-3">For Organizers</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-black">Create Event</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-black">Pricing</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-black">Resources</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-3">Connect With Us</h3>
                    <div class="flex space-x-4 mt-3">
                        <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-gray-200 text-center">
                <p>© 2025 HEMS. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
