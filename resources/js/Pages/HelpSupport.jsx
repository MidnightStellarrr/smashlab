import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
import { useState } from 'react';



export default function HelpSupport() {
    const [activeFaq, setActiveFaq] = useState(null);
    const [activeGuide, setActiveGuide] = useState(null);
    const [showChatModal, setShowChatModal] = useState(false);
    const [chatMessages, setChatMessages] = useState([
        {
            id: 1,
            sender: 'support',
            message: '👋 Hi there! Welcome to SmashLab Support. How can I help you today?',
            time: 'Just now'
        }
    ]);
    const [newMessage, setNewMessage] = useState('');
    const [isTyping, setIsTyping] = useState(false);
    const [chatName, setChatName] = useState('');
    const [chatEmail, setChatEmail] = useState('');
    const [chatStarted, setChatStarted] = useState(false);

    const toggleFaq = (index) => {
        setActiveFaq(activeFaq === index ? null : index);
    };

    const toggleGuide = (index) => {
        setActiveGuide(activeGuide === index ? null : index);
    };

    const handleStartChat = () => {
        if (chatName.trim() && chatEmail.trim()) {
            setChatStarted(true);
            // Auto-reply after 2 seconds
            setTimeout(() => {
                const autoReply = {
                    id: Date.now(),
                    sender: 'support',
                    message: `Thanks for reaching out, ${chatName}! 🏸 How can I assist you with your SmashLab experience?`,
                    time: 'Just now'
                };
                setChatMessages(prev => [...prev, autoReply]);
            }, 1500);
        }
    };

    const handleSendMessage = (e) => {
        e.preventDefault();
        if (!newMessage.trim()) return;

        const message = {
            id: Date.now(),
            sender: 'user',
            message: newMessage.trim(),
            time: 'Just now'
        };

        setChatMessages(prev => [...prev, message]);
        setNewMessage('');
        setIsTyping(true);

        // Simulate support response
        setTimeout(() => {
            const responses = [
                "Thanks for your message! Let me look into that for you. 🏸",
                "Great question! Let me get you the information you need.",
                "I understand your concern. Let me help you with that!",
                "That's a common question! Here's what you need to know...",
                "Thanks for reaching out! I'm happy to assist you with that.",
                "Let me check that for you. One moment please...",
                "I see! Here's what I recommend for your situation.",
                "That's a great question! Let me explain..."
            ];
            const randomResponse = responses[Math.floor(Math.random() * responses.length)];
            const reply = {
                id: Date.now() + 1,
                sender: 'support',
                message: randomResponse,
                time: 'Just now'
            };
            setChatMessages(prev => [...prev, reply]);
            setIsTyping(false);
        }, 2000);
    };

    const faqs = [
        {
            question: 'How do I book a court?',
            answer: 'To book a court, go to the "Book Court" page from the sidebar menu. Select your preferred date, time, and court number. Review the details and click "Confirm Booking". You will receive a confirmation email once your booking is confirmed.'
        },
        {
            question: 'What are the class levels offered?',
            answer: 'We offer three class levels: Beginner (no experience needed), Intermediate (basic knowledge required), and Advanced (tournament experience recommended). Each class is designed to help you progress at your own pace.'
        },
        {
            question: 'How do I enroll in a class?',
            answer: 'Visit the "Classes" page from the sidebar, browse available classes, and click "Learn More" on the class you\'re interested in. From there, click "Enroll Now" and fill out the enrollment form. You\'ll receive a confirmation once your enrollment is processed.'
        },
        {
            question: 'What is the cancellation policy?',
            answer: 'You can cancel bookings up to 2 hours before the scheduled time without penalty. Cancellations made less than 2 hours before the booking may incur a fee. Class cancellations require at least 24 hours notice.'
        },
        {
            question: 'Do you provide equipment?',
            answer: 'Yes! We provide rackets and shuttlecocks for all classes and court bookings. However, we recommend bringing your own equipment if you have it. Comfortable athletic clothing and indoor court shoes are required.'
        },
        {
            question: 'Can I reschedule my booking?',
            answer: 'Yes, you can reschedule your booking up to 24 hours in advance. Simply go to "My Bookings" and click "Reschedule" on the booking you wish to change. Availability is subject to court schedules.'
        },
        {
            question: 'Are there age restrictions?',
            answer: 'We welcome players of all ages. Students under 18 require a guardian\'s consent and signature on the waiver form. Children under 12 must be accompanied by an adult at all times.'
        },
        {
            question: 'How do I contact a coach?',
            answer: 'You can reach out to your coach directly through the "Profile" page. Each coach has a contact form available. For general inquiries, use the support email or phone number below.'
        },
        {
            question: 'What if I miss a scheduled class?',
            answer: 'If you miss a class, please notify us at least 24 hours in advance. Make-up sessions are subject to availability and can be arranged with your coach. Repeated no-shows may result in forfeiture of class fees.'
        },
        {
            question: 'How do I get my certificate after completing a class?',
            answer: 'Certificates are automatically generated upon completion of a class. You can view and download your certificate from your "My Classes" page under the "Certificate" button for completed classes.'
        }
    ];

    const guides = [
        {
            id: 'booking',
            title: 'How to Book a Court',
            icon: 'fa-solid fa-calendar-check',
            steps: [
                'Go to the "Book Court" page from the sidebar menu',
                'Select your preferred date from the calendar',
                'Choose your desired time slot (10:00 AM - 10:00 PM)',
                'Pick your preferred court (Court 1-4)',
                'Select the number of players (1-8 players)',
                'Review your booking summary',
                'Choose your payment method (GCash, Maya, or Front Desk)',
                'Click "Confirm Booking" to finalize'
            ],
            tips: [
                'Book at least 24 hours in advance for best availability',
                'Courts can be reserved for 1-hour sessions',
                'You can view court availability in the schedule table',
                'Green = Available, Red = Reserved, Yellow = Under Maintenance'
            ]
        },
        {
            id: 'enroll',
            title: 'How to Enroll in a Class',
            icon: 'fa-solid fa-chalkboard-user',
            steps: [
                'Go to the "Classes" page from the sidebar menu',
                'Browse available classes: Beginner, Intermediate, or Advanced',
                'Click "Learn More" on the class you\'re interested in',
                'Review the class details, curriculum, and pricing',
                'Click "Enroll Now" to start the enrollment process',
                'Step 1: Fill in your personal details (name, contact, emergency info)',
                'Step 2: Select your skill level and class preferences',
                'Step 3: Choose your package (Drop-in, Monthly, or Quarterly)',
                'Select your payment method and agree to the terms',
                'Submit your enrollment form'
            ],
            tips: [
                'Beginner Class: No experience needed, all equipment provided',
                'Intermediate Class: Basic skills required, max 6 students',
                'Advanced Class: Tournament experience recommended, max 4 students',
                'Students under 18 require guardian consent',
                'You can schedule a free trial session before enrolling'
            ]
        },
        {
            id: 'profile',
            title: 'Manage Your Profile & Bookings',
            icon: 'fa-solid fa-user-gear',
            steps: [
                'Go to "Profile" from the sidebar menu to view your account',
                'Update your personal information and contact details',
                'Change your password for security',
                'View your booking history and class enrollments',
                'Cancel or reschedule upcoming bookings',
                'Drop classes you no longer wish to attend',
                'Download certificates for completed classes'
            ],
            tips: [
                'Keep your contact information up to date',
                'Check your bookings regularly for any changes',
                'Contact support if you need assistance with your account'
            ]
        }
    ];

    return (
        <AuthenticatedLayout header={<h2 className="text-xl font-semibold text-gray-800 dark:text-white">Help & Support</h2>}>
            <Head title="Help & Support" />

            <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                
                {/* ── Main Content ── */}
                <div className="rounded-2xl bg-white p-6 shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <div className="flex items-start gap-4">
                        <div className="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900/30">
                            <i className="fa-solid fa-circle-question text-2xl text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <div>
                            <h1 className="text-2xl font-bold text-gray-800 dark:text-white">Help & Support</h1>
                            <p className="mt-1 text-sm text-gray-600 dark:text-gray-300">
                                Need help? Check our guides, contact support, or review common booking questions.
                            </p>
                        </div>
                    </div>
                </div>

                {/* ── Quick Help Categories ── */}
                <div className="mt-6 grid gap-4 md:grid-cols-3">
                    <div className="rounded-2xl bg-white p-6 shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700 hover:shadow-md transition">
                        <div className="flex h-12 w-12 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900/30 mb-3">
                            <i className="fa-solid fa-book text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 className="font-semibold text-gray-800 dark:text-white">Guides & Tutorials</h3>
                        <p className="mt-1 text-sm text-gray-600 dark:text-gray-300">Step-by-step guides on bookings, classes, and more.</p>
                        <a href="#guides" className="mt-3 inline-block text-sm text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                            Browse Guides →
                        </a>
                    </div>

                    <div className="rounded-2xl bg-white p-6 shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700 hover:shadow-md transition">
                        <div className="flex h-12 w-12 items-center justify-center rounded-full bg-green-100 dark:bg-green-900/30 mb-3">
                            <i className="fa-solid fa-headset text-green-600 dark:text-green-400"></i>
                        </div>
                        <h3 className="font-semibold text-gray-800 dark:text-white">Contact Support</h3>
                        <p className="mt-1 text-sm text-gray-600 dark:text-gray-300">Get in touch with our support team for assistance.</p>
                        <a href="#contact" className="mt-3 inline-block text-sm text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                            Contact Us →
                        </a>
                    </div>

                    <div className="rounded-2xl bg-white p-6 shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700 hover:shadow-md transition">
                        <div className="flex h-12 w-12 items-center justify-center rounded-full bg-purple-100 dark:bg-purple-900/30 mb-3">
                            <i className="fa-solid fa-message text-purple-600 dark:text-purple-400"></i>
                        </div>
                        <h3 className="font-semibold text-gray-800 dark:text-white">Live Chat</h3>
                        <p className="mt-1 text-sm text-gray-600 dark:text-gray-300">Chat with our team in real-time for quick answers.</p>
                        <button 
                            onClick={() => setShowChatModal(true)}
                            className="mt-3 inline-block text-sm text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300"
                        >
                            Start Chat →
                        </button>
                    </div>
                </div>

                {/* ── Guides & Tutorials Section ── */}
                <div id="guides" className="mt-6 rounded-2xl bg-white p-6 shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <div className="flex items-center gap-3 mb-4">
                        <i className="fa-solid fa-book-open text-xl text-blue-600 dark:text-blue-400"></i>
                        <h2 className="text-lg font-semibold text-gray-800 dark:text-white">Guides & Tutorials</h2>
                    </div>
                    
                    <div className="space-y-4">
                        {guides.map((guide, index) => (
                            <div key={guide.id} className="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                                <button
                                    onClick={() => toggleGuide(index)}
                                    className="flex w-full items-center justify-between p-4 text-left transition hover:bg-gray-50 dark:hover:bg-gray-700/50"
                                >
                                    <div className="flex items-center gap-3">
                                        <div className="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900/30">
                                            <i className={`${guide.icon} text-blue-600 dark:text-blue-400`}></i>
                                        </div>
                                        <span className="font-semibold text-gray-800 dark:text-white">{guide.title}</span>
                                    </div>
                                    <i className={`fa-solid fa-chevron-down text-gray-400 transition-transform duration-200 ${
                                        activeGuide === index ? 'rotate-180' : ''
                                    }`}></i>
                                </button>
                                <div className={`overflow-hidden transition-all duration-300 ${
                                    activeGuide === index ? 'max-h-[800px]' : 'max-h-0'
                                }`}>
                                    <div className="p-4 pt-0 border-t border-gray-200 dark:border-gray-700">
                                        <div className="mt-4">
                                            <h4 className="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Steps:</h4>
                                            <ol className="space-y-1.5 list-decimal list-inside text-sm text-gray-600 dark:text-gray-300">
                                                {guide.steps.map((step, i) => (
                                                    <li key={i} className="pl-2">{step}</li>
                                                ))}
                                            </ol>
                                        </div>
                                        <div className="mt-4">
                                            <h4 className="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">💡 Tips:</h4>
                                            <ul className="space-y-1.5 list-disc list-inside text-sm text-gray-600 dark:text-gray-300">
                                                {guide.tips.map((tip, i) => (
                                                    <li key={i} className="pl-2">{tip}</li>
                                                ))}
                                            </ul>
                                        </div>
                                        {guide.id === 'booking' && (
                                            <div className="mt-4">
                                                <Link
                                                    href="/book_now"
                                                    className="inline-block rounded-full bg-blue-600 px-4 py-1.5 text-sm font-semibold text-white transition hover:bg-blue-700"
                                                >
                                                    Go to Book Court 
                                                </Link>
                                            </div>
                                        )}
                                        {guide.id === 'enroll' && (
                                            <div className="mt-4">
                                                <Link
                                                    href="/classes"
                                                    className="inline-block rounded-full bg-blue-600 px-4 py-1.5 text-sm font-semibold text-white transition hover:bg-blue-700"
                                                >
                                                    Browse Classes 
                                                </Link>
                                            </div>
                                        )}
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>

                {/* ── FAQ Section ── */}
                <div className="mt-6 rounded-2xl bg-white p-6 shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <div className="flex items-center gap-3 mb-4">
                        <i className="fa-solid fa-list-check text-xl text-blue-600 dark:text-blue-400"></i>
                        <h2 className="text-lg font-semibold text-gray-800 dark:text-white">Frequently Asked Questions</h2>
                    </div>
                    
                    <div className="space-y-2">
                        {faqs.map((faq, index) => (
                            <div key={index} className="border-b border-gray-200 dark:border-gray-700 last:border-0">
                                <button
                                    onClick={() => toggleFaq(index)}
                                    className="flex w-full items-center justify-between py-3 text-left transition hover:text-blue-600 dark:hover:text-blue-400"
                                >
                                    <span className="font-medium text-gray-800 dark:text-white">{faq.question}</span>
                                    <i className={`fa-solid fa-chevron-down text-gray-400 transition-transform duration-200 ${
                                        activeFaq === index ? 'rotate-180' : ''
                                    }`}></i>
                                </button>
                                <div className={`overflow-hidden transition-all duration-300 ${
                                    activeFaq === index ? 'max-h-96 pb-3' : 'max-h-0'
                                }`}>
                                    <p className="text-sm text-gray-600 dark:text-gray-300">{faq.answer}</p>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>

                {/* ── Contact Information ── */}
                <div id="contact" className="mt-6 rounded-2xl bg-white p-6 shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <div className="flex items-center gap-3 mb-4">
                        <i className="fa-solid fa-address-card text-xl text-blue-600 dark:text-blue-400"></i>
                        <h2 className="text-lg font-semibold text-gray-800 dark:text-white">Contact Information</h2>
                    </div>

                    <div className="grid gap-4 md:grid-cols-3">
                        <div className="flex items-center gap-3 rounded-xl bg-gray-50 p-4 dark:bg-gray-700">
                            <div className="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900/30">
                                <i className="fa-solid fa-envelope text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div>
                                <p className="text-xs text-gray-500 dark:text-gray-400">Email</p>
                                <p className="text-sm font-medium text-gray-800 dark:text-white">support@smashlab.com</p>
                            </div>
                        </div>

                        <div className="flex items-center gap-3 rounded-xl bg-gray-50 p-4 dark:bg-gray-700">
                            <div className="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-green-100 dark:bg-green-900/30">
                                <i className="fa-solid fa-phone text-green-600 dark:text-green-400"></i>
                            </div>
                            <div>
                                <p className="text-xs text-gray-500 dark:text-gray-400">Phone</p>
                                <p className="text-sm font-medium text-gray-800 dark:text-white">+63 912 345 6789</p>
                            </div>
                        </div>

                        <div className="flex items-center gap-3 rounded-xl bg-gray-50 p-4 dark:bg-gray-700">
                            <div className="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-purple-100 dark:bg-purple-900/30">
                                <i className="fa-solid fa-clock text-purple-600 dark:text-purple-400"></i>
                            </div>
                            <div>
                                <p className="text-xs text-gray-500 dark:text-gray-400">Support Hours</p>
                                <p className="text-sm font-medium text-gray-800 dark:text-white">Mon-Sat 8AM - 10PM</p>
                            </div>
                        </div>
                    </div>

                    <div className="mt-4 rounded-xl bg-blue-50 p-4 dark:bg-blue-900/20">
                        <p className="text-sm text-blue-700 dark:text-blue-300">
                            <i className="fa-solid fa-clock mr-2"></i>
                            Response time: Within 24 hours for email inquiries. Live chat available during support hours.
                        </p>
                    </div>
                </div>

                
            </div>

            {/* ── Live Chat Modal ── */}
            {showChatModal && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm p-4">
                    <div className="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl w-full max-w-lg max-h-[90vh] border border-gray-200 dark:border-gray-700 animate-scale-in flex flex-col">
                        
                        {/* Chat Header */}
                        <div className="flex items-center justify-between p-4 border-b border-gray-200 dark:border-gray-700">
                            <div className="flex items-center gap-3">
                                <div className="flex h-10 w-10 items-center justify-center rounded-full bg-purple-100 dark:bg-purple-900/30">
                                    <i className="fa-solid fa-comment-dots text-purple-600 dark:text-purple-400"></i>
                                </div>
                                <div>
                                    <h3 className="font-semibold text-gray-800 dark:text-white">Live Chat</h3>
                                    <p className="text-xs text-green-500 flex items-center gap-1">
                                        <span className="inline-block h-2 w-2 rounded-full bg-green-500 animate-pulse"></span>
                                        Online
                                    </p>
                                </div>
                            </div>
                            <button
                                onClick={() => {
                                    setShowChatModal(false);
                                    setChatStarted(false);
                                    setChatMessages([{
                                        id: 1,
                                        sender: 'support',
                                        message: '👋 Hi there! Welcome to SmashLab Support. How can I help you today?',
                                        time: 'Just now'
                                    }]);
                                    setChatName('');
                                    setChatEmail('');
                                }}
                                className="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"
                            >
                                <i className="fa-solid fa-xmark text-xl"></i>
                            </button>
                        </div>

                        {/* Chat Body */}
                        <div className="flex-1 overflow-y-auto p-4 space-y-4 max-h-[400px]">
                            {!chatStarted ? (
                                // Pre-chat form
                                <div className="space-y-4">
                                    <p className="text-sm text-gray-600 dark:text-gray-300 text-center">
                                        Please provide your details to start the chat.
                                    </p>
                                    <div>
                                        <label className="text-sm font-medium text-gray-700 dark:text-gray-300">Your Name</label>
                                        <input
                                            type="text"
                                            value={chatName}
                                            onChange={(e) => setChatName(e.target.value)}
                                            className="mt-1 w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-blue-500 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                            placeholder="Enter your name"
                                        />
                                    </div>
                                    <div>
                                        <label className="text-sm font-medium text-gray-700 dark:text-gray-300">Email Address</label>
                                        <input
                                            type="email"
                                            value={chatEmail}
                                            onChange={(e) => setChatEmail(e.target.value)}
                                            className="mt-1 w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-blue-500 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                            placeholder="Enter your email"
                                        />
                                    </div>
                                    <button
                                        onClick={handleStartChat}
                                        disabled={!chatName.trim() || !chatEmail.trim()}
                                        className="w-full rounded-full bg-purple-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-purple-700 disabled:opacity-50 disabled:cursor-not-allowed"
                                    >
                                        Start Chat
                                    </button>
                                </div>
                            ) : (
                                // Chat messages
                                <>
                                    {chatMessages.map((msg) => (
                                        <div
                                            key={msg.id}
                                            className={`flex ${msg.sender === 'user' ? 'justify-end' : 'justify-start'}`}
                                        >
                                            <div
                                                className={`max-w-[80%] rounded-2xl px-4 py-2 ${
                                                    msg.sender === 'user'
                                                        ? 'bg-purple-600 text-white'
                                                        : 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-white'
                                                }`}
                                            >
                                                <p className="text-sm">{msg.message}</p>
                                                <p className={`text-[10px] mt-1 ${
                                                    msg.sender === 'user'
                                                        ? 'text-purple-200'
                                                        : 'text-gray-400 dark:text-gray-500'
                                                }`}>
                                                    {msg.time}
                                                </p>
                                            </div>
                                        </div>
                                    ))}
                                    {isTyping && (
                                        <div className="flex justify-start">
                                            <div className="bg-gray-100 dark:bg-gray-700 rounded-2xl px-4 py-2">
                                                <div className="flex gap-1">
                                                    <span className="inline-block h-2 w-2 rounded-full bg-gray-400 animate-bounce" style={{ animationDelay: '0ms' }}></span>
                                                    <span className="inline-block h-2 w-2 rounded-full bg-gray-400 animate-bounce" style={{ animationDelay: '150ms' }}></span>
                                                    <span className="inline-block h-2 w-2 rounded-full bg-gray-400 animate-bounce" style={{ animationDelay: '300ms' }}></span>
                                                </div>
                                            </div>
                                        </div>
                                    )}
                                </>
                            )}
                        </div>

                        {/* Chat Input */}
                        {chatStarted && (
                            <div className="border-t border-gray-200 dark:border-gray-700 p-4">
                                <form onSubmit={handleSendMessage} className="flex gap-2">
                                    <input
                                        type="text"
                                        value={newMessage}
                                        onChange={(e) => setNewMessage(e.target.value)}
                                        placeholder="Type your message..."
                                        className="flex-1 rounded-full border border-gray-300 px-4 py-2 focus:border-purple-500 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                    />
                                    <button
                                        type="submit"
                                        disabled={!newMessage.trim()}
                                        className="rounded-full bg-purple-600 px-4 py-2 text-white transition hover:bg-purple-700 disabled:opacity-50"
                                    >
                                        <i className="fa-solid fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        )}
                    </div>
                </div>
            )}

            {/* ── Custom CSS for animations ── */}
            <style>{`
                @keyframes scaleIn {
                    from {
                        transform: scale(0.95);
                        opacity: 0;
                    }
                    to {
                        transform: scale(1);
                        opacity: 1;
                    }
                }
                @keyframes bounce {
                    0%, 100% {
                        transform: translateY(0);
                    }
                    50% {
                        transform: translateY(-4px);
                    }
                }
                .animate-scale-in {
                    animation: scaleIn 0.2s ease-out;
                }
                .animate-bounce {
                    animation: bounce 0.8s ease-in-out infinite;
                }
            `}</style>
        </AuthenticatedLayout>
    );
}