import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link, usePage } from '@inertiajs/react';
import { useState, useEffect } from 'react';

export default function Settings() {
    const [activeTab, setActiveTab] = useState('account');
    const [showToast, setShowToast] = useState(false);
    const [toastMessage, setToastMessage] = useState('');
    const [toastType, setToastType] = useState('success');

    // Check current dark mode state from localStorage
    const [isDarkMode, setIsDarkMode] = useState(() => {
        if (typeof window === 'undefined') return false;
        return document.documentElement.classList.contains('dark');
    });

    const [settings, setSettings] = useState({
        // Account Settings
        language: 'english',
        timezone: 'asia_manila',
        
        // Notification Settings
        emailNotifications: true,
        bookingReminders: true,
        classReminders: true,
        promotionalEmails: false,
        smsNotifications: true,
        
        // Privacy Settings
        profileVisibility: 'public',
        showEmail: false,
        showPhone: false,
        allowMessages: true,
        
        // Display Settings
        darkMode: isDarkMode,
        compactView: false,
        fontSize: 'medium',
    });

    // Sync dark mode with localStorage
    useEffect(() => {
        const storedTheme = localStorage.getItem('smashlab-theme');
        if (storedTheme === 'dark') {
            document.documentElement.classList.add('dark');
            setIsDarkMode(true);
        } else {
            document.documentElement.classList.remove('dark');
            setIsDarkMode(false);
        }
    }, []);

    const handleToggle = (key) => {
        const newValue = !settings[key];
        setSettings(prev => ({
            ...prev,
            [key]: newValue
        }));

        // Handle Dark Mode toggle
        if (key === 'darkMode') {
            setIsDarkMode(newValue);
            if (newValue) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('smashlab-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('smashlab-theme', 'light');
            }
        }
    };

    const handleSelect = (key, value) => {
        setSettings(prev => ({
            ...prev,
            [key]: value
        }));
    };

    const handleSave = (section) => {
        // Show toast notification
        setToastMessage(`${section} settings saved successfully! ✅`);
        setToastType('success');
        setShowToast(true);
        
        setTimeout(() => {
            setShowToast(false);
        }, 3000);

        // If dark mode was changed, ensure it's applied
        if (section === 'Display') {
            if (settings.darkMode) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('smashlab-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('smashlab-theme', 'light');
            }
        }
    };

    const tabs = [
        { id: 'account', label: 'Account', icon: 'fa-solid fa-user' },
        { id: 'notifications', label: 'Notifications', icon: 'fa-solid fa-bell' },
        { id: 'privacy', label: 'Privacy', icon: 'fa-solid fa-lock' },
        { id: 'display', label: 'Display', icon: 'fa-solid fa-display' },
    ];

    return (
        <AuthenticatedLayout header={<h2 className="text-xl font-semibold text-gray-800 dark:text-white">Settings</h2>}>
            <Head title="Settings" />

            {/* ── Toast Notification ── */}
            {showToast && (
                <div className="fixed top-4 right-4 z-50 animate-slide-in">
                    <div className={`rounded-2xl px-6 py-4 shadow-lg flex items-center gap-3 ${
                        toastType === 'success' ? 'bg-green-500 text-white' :
                        toastType === 'error' ? 'bg-red-500 text-white' :
                        'bg-blue-500 text-white'
                    }`}>
                        <i className="fa-solid fa-check-circle text-xl"></i>
                        <span className="font-medium">{toastMessage}</span>
                        <button 
                            onClick={() => setShowToast(false)}
                            className="ml-4 text-white/70 hover:text-white"
                        >
                            <i className="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                </div>
            )}

            <div className={`mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ${settings.compactView ? 'space-y-4' : 'space-y-6'}`}>
                {/* ── Main Container ── */}
                <div className={`rounded-2xl bg-white shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700 overflow-hidden ${
                    settings.compactView ? 'p-4' : ''
                }`}>
                    
                    {/* ── Header ── */}
                    <div className={`border-b border-gray-200 dark:border-gray-700 ${settings.compactView ? 'p-4' : 'p-6'}`}>
                        <div className="flex items-start gap-4">
                            <div className={`flex flex-shrink-0 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900/30 ${
                                settings.compactView ? 'h-10 w-10' : 'h-12 w-12'
                            }`}>
                                <i className={`fa-solid fa-gear text-blue-600 dark:text-blue-400 ${
                                    settings.compactView ? 'text-xl' : 'text-2xl'
                                }`}></i>
                            </div>
                            <div>
                                <h1 className={`font-bold text-gray-800 dark:text-white ${
                                    settings.compactView ? 'text-xl' : 'text-2xl'
                                }`}>Settings</h1>
                                <p className={`text-sm text-gray-600 dark:text-gray-300 ${settings.compactView ? 'mt-0' : 'mt-1'}`}>
                                    Manage your account preferences, notifications, and privacy settings here.
                                </p>
                            </div>
                        </div>
                    </div>

                    {/* ── Tabs ── */}
                    <div className={`flex overflow-x-auto border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900/50 ${
                        settings.compactView ? 'text-sm' : ''
                    }`}>
                        {tabs.map((tab) => (
                            <button
                                key={tab.id}
                                onClick={() => setActiveTab(tab.id)}
                                className={`flex items-center gap-2 px-6 py-3 font-medium transition whitespace-nowrap ${
                                    settings.compactView ? 'text-xs' : 'text-sm'
                                } ${
                                    activeTab === tab.id
                                        ? 'border-b-2 border-blue-600 text-blue-600 dark:text-blue-400 dark:border-blue-400'
                                        : 'text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200'
                                }`}
                            >
                                <i className={tab.icon}></i>
                                {tab.label}
                            </button>
                        ))}
                    </div>

                    {/* ── Tab Content ── */}
                    <div className={`${settings.compactView ? 'p-4' : 'p-6'}`}>
                        {/* Account Settings */}
                        {activeTab === 'account' && (
                            <div className={`space-y-${settings.compactView ? '4' : '6'}`}>
                                <div>
                                    <h2 className={`font-semibold text-gray-800 dark:text-white ${
                                        settings.compactView ? 'text-base' : 'text-lg'
                                    }`}>Account Settings</h2>
                                    <p className="text-sm text-gray-600 dark:text-gray-300">Manage your account preferences.</p>
                                </div>

                                <div className={`space-y-${settings.compactView ? '2' : '4'}`}>
                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    } border-b border-gray-100 dark:border-gray-700`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>Language</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Choose your preferred language</p>
                                        </div>
                                        <select
                                            value={settings.language}
                                            onChange={(e) => handleSelect('language', e.target.value)}
                                            className="rounded-lg border border-gray-300 px-8 py-1.5 text-sm dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                        >
                                            <option value="english">English</option>
                                            <option value="filipino">Filipino</option>
                                            <option value="spanish">Spanish</option>
                                        </select>
                                    </div>

                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    } border-b border-gray-100 dark:border-gray-700`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>Timezone</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Set your local timezone</p>
                                        </div>
                                        <select
                                            value={settings.timezone}
                                            onChange={(e) => handleSelect('timezone', e.target.value)}
                                            className="rounded-lg border border-gray-300 px-3 py-1.5 text-sm dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                        >
                                            <option value="asia_manila">Asia/Manila (GMT+8)</option>
                                            <option value="asia_tokyo">Asia/Tokyo (GMT+9)</option>
                                            <option value="america_newyork">America/New York (GMT-5)</option>
                                            <option value="europe_london">Europe/London (GMT+0)</option>
                                        </select>
                                    </div>

                                    
                                </div>

                                <button
                                    onClick={() => handleSave('Account')}
                                    className={`rounded-full bg-blue-600 text-sm font-semibold text-white transition hover:bg-blue-700 ${
                                        settings.compactView ? 'px-4 py-1.5' : 'px-6 py-2'
                                    }`}
                                >
                                    Save Account Settings
                                </button>
                            </div>
                        )}

                        {/* Notification Settings */}
                        {activeTab === 'notifications' && (
                            <div className={`space-y-${settings.compactView ? '4' : '6'}`}>
                                <div>
                                    <h2 className={`font-semibold text-gray-800 dark:text-white ${
                                        settings.compactView ? 'text-base' : 'text-lg'
                                    }`}>Notification Preferences</h2>
                                    <p className="text-sm text-gray-600 dark:text-gray-300">Control how and when you receive notifications.</p>
                                </div>

                                <div className={`space-y-${settings.compactView ? '2' : '4'}`}>
                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    } border-b border-gray-100 dark:border-gray-700`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>Email Notifications</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Receive notifications via email</p>
                                        </div>
                                        <button
                                            onClick={() => handleToggle('emailNotifications')}
                                            className={`relative h-6 w-11 rounded-full transition ${
                                                settings.emailNotifications ? 'bg-blue-600' : 'bg-gray-300 dark:bg-gray-600'
                                            }`}
                                        >
                                            <span className={`absolute top-0.5 h-5 w-5 rounded-full bg-white transition ${
                                                settings.emailNotifications ? 'right-0.5' : 'left-0.5'
                                            }`}></span>
                                        </button>
                                    </div>

                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    } border-b border-gray-100 dark:border-gray-700`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>Booking Reminders</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Get reminders for upcoming bookings</p>
                                        </div>
                                        <button
                                            onClick={() => handleToggle('bookingReminders')}
                                            className={`relative h-6 w-11 rounded-full transition ${
                                                settings.bookingReminders ? 'bg-blue-600' : 'bg-gray-300 dark:bg-gray-600'
                                            }`}
                                        >
                                            <span className={`absolute top-0.5 h-5 w-5 rounded-full bg-white transition ${
                                                settings.bookingReminders ? 'right-0.5' : 'left-0.5'
                                            }`}></span>
                                        </button>
                                    </div>

                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    } border-b border-gray-100 dark:border-gray-700`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>Class Reminders</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Get reminders for upcoming classes</p>
                                        </div>
                                        <button
                                            onClick={() => handleToggle('classReminders')}
                                            className={`relative h-6 w-11 rounded-full transition ${
                                                settings.classReminders ? 'bg-blue-600' : 'bg-gray-300 dark:bg-gray-600'
                                            }`}
                                        >
                                            <span className={`absolute top-0.5 h-5 w-5 rounded-full bg-white transition ${
                                                settings.classReminders ? 'right-0.5' : 'left-0.5'
                                            }`}></span>
                                        </button>
                                    </div>

                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    } border-b border-gray-100 dark:border-gray-700`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>Promotional Emails</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Receive offers and updates</p>
                                        </div>
                                        <button
                                            onClick={() => handleToggle('promotionalEmails')}
                                            className={`relative h-6 w-11 rounded-full transition ${
                                                settings.promotionalEmails ? 'bg-blue-600' : 'bg-gray-300 dark:bg-gray-600'
                                            }`}
                                        >
                                            <span className={`absolute top-0.5 h-5 w-5 rounded-full bg-white transition ${
                                                settings.promotionalEmails ? 'right-0.5' : 'left-0.5'
                                            }`}></span>
                                        </button>
                                    </div>

                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    }`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>SMS Notifications</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Receive text message alerts</p>
                                        </div>
                                        <button
                                            onClick={() => handleToggle('smsNotifications')}
                                            className={`relative h-6 w-11 rounded-full transition ${
                                                settings.smsNotifications ? 'bg-blue-600' : 'bg-gray-300 dark:bg-gray-600'
                                            }`}
                                        >
                                            <span className={`absolute top-0.5 h-5 w-5 rounded-full bg-white transition ${
                                                settings.smsNotifications ? 'right-0.5' : 'left-0.5'
                                            }`}></span>
                                        </button>
                                    </div>
                                </div>

                                <button
                                    onClick={() => handleSave('Notification')}
                                    className={`rounded-full bg-blue-600 text-sm font-semibold text-white transition hover:bg-blue-700 ${
                                        settings.compactView ? 'px-4 py-1.5' : 'px-6 py-2'
                                    }`}
                                >
                                    Save Notification Settings
                                </button>
                            </div>
                        )}

                        {/* Privacy Settings */}
                        {activeTab === 'privacy' && (
                            <div className={`space-y-${settings.compactView ? '4' : '6'}`}>
                                <div>
                                    <h2 className={`font-semibold text-gray-800 dark:text-white ${
                                        settings.compactView ? 'text-base' : 'text-lg'
                                    }`}>Privacy Settings</h2>
                                    <p className="text-sm text-gray-600 dark:text-gray-300">Control your privacy and visibility.</p>
                                </div>

                                <div className={`space-y-${settings.compactView ? '2' : '4'}`}>
                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    } border-b border-gray-100 dark:border-gray-700`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>Profile Visibility</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Who can see your profile</p>
                                        </div>
                                        <select
                                            value={settings.profileVisibility}
                                            onChange={(e) => handleSelect('profileVisibility', e.target.value)}
                                            className="rounded-lg border border-gray-300 px-3 py-1.5 text-sm dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                        >
                                            <option value="public">Public</option>
                                            <option value="members">Members Only</option>
                                            <option value="private">Private</option>
                                        </select>
                                    </div>

                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    } border-b border-gray-100 dark:border-gray-700`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>Show Email</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Display email on your profile</p>
                                        </div>
                                        <button
                                            onClick={() => handleToggle('showEmail')}
                                            className={`relative h-6 w-11 rounded-full transition ${
                                                settings.showEmail ? 'bg-blue-600' : 'bg-gray-300 dark:bg-gray-600'
                                            }`}
                                        >
                                            <span className={`absolute top-0.5 h-5 w-5 rounded-full bg-white transition ${
                                                settings.showEmail ? 'right-0.5' : 'left-0.5'
                                            }`}></span>
                                        </button>
                                    </div>

                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    } border-b border-gray-100 dark:border-gray-700`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>Show Phone</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Display phone number on your profile</p>
                                        </div>
                                        <button
                                            onClick={() => handleToggle('showPhone')}
                                            className={`relative h-6 w-11 rounded-full transition ${
                                                settings.showPhone ? 'bg-blue-600' : 'bg-gray-300 dark:bg-gray-600'
                                            }`}
                                        >
                                            <span className={`absolute top-0.5 h-5 w-5 rounded-full bg-white transition ${
                                                settings.showPhone ? 'right-0.5' : 'left-0.5'
                                            }`}></span>
                                        </button>
                                    </div>

                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    }`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>Allow Messages</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Receive messages from other members</p>
                                        </div>
                                        <button
                                            onClick={() => handleToggle('allowMessages')}
                                            className={`relative h-6 w-11 rounded-full transition ${
                                                settings.allowMessages ? 'bg-blue-600' : 'bg-gray-300 dark:bg-gray-600'
                                            }`}
                                        >
                                            <span className={`absolute top-0.5 h-5 w-5 rounded-full bg-white transition ${
                                                settings.allowMessages ? 'right-0.5' : 'left-0.5'
                                            }`}></span>
                                        </button>
                                    </div>
                                </div>

                                <button
                                    onClick={() => handleSave('Privacy')}
                                    className={`rounded-full bg-blue-600 text-sm font-semibold text-white transition hover:bg-blue-700 ${
                                        settings.compactView ? 'px-4 py-1.5' : 'px-6 py-2'
                                    }`}
                                >
                                    Save Privacy Settings
                                </button>
                            </div>
                        )}

                        {/* Display Settings */}
                        {activeTab === 'display' && (
                            <div className={`space-y-${settings.compactView ? '4' : '6'}`}>
                                <div>
                                    <h2 className={`font-semibold text-gray-800 dark:text-white ${
                                        settings.compactView ? 'text-base' : 'text-lg'
                                    }`}>Display Settings</h2>
                                    <p className="text-sm text-gray-600 dark:text-gray-300">Customize your viewing experience.</p>
                                </div>

                                <div className={`space-y-${settings.compactView ? '2' : '4'}`}>
                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    } border-b border-gray-100 dark:border-gray-700`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>Dark Mode</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Switch between light and dark theme</p>
                                        </div>
                                        <button
                                            onClick={() => handleToggle('darkMode')}
                                            className={`relative h-6 w-11 rounded-full transition ${
                                                settings.darkMode ? 'bg-blue-600' : 'bg-gray-300 dark:bg-gray-600'
                                            }`}
                                        >
                                            <span className={`absolute top-0.5 h-5 w-5 rounded-full bg-white transition ${
                                                settings.darkMode ? 'right-0.5' : 'left-0.5'
                                            }`}></span>
                                        </button>
                                    </div>

                

                                    <div className={`flex items-center justify-between ${
                                        settings.compactView ? 'py-2' : 'py-3'
                                    }`}>
                                        <div>
                                            <p className={`font-medium text-gray-800 dark:text-white ${
                                                settings.compactView ? 'text-sm' : ''
                                            }`}>Font Size</p>
                                            <p className={`text-gray-500 dark:text-gray-400 ${
                                                settings.compactView ? 'text-xs' : 'text-sm'
                                            }`}>Adjust text size for better readability</p>
                                        </div>
                                        <select
                                            value={settings.fontSize}
                                            onChange={(e) => handleSelect('fontSize', e.target.value)}
                                            className="rounded-lg border border-gray-300 px-8 py-1.5 text-sm dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                        >
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="large">Large</option>
                                        </select>
                                    </div>
                                </div>

                                <button
                                    onClick={() => handleSave('Display')}
                                    className={`rounded-full bg-blue-600 text-sm font-semibold text-white transition hover:bg-blue-700 ${
                                        settings.compactView ? 'px-4 py-1.5' : 'px-6 py-2'
                                    }`}
                                >
                                    Save Display Settings
                                </button>
                            </div>
                        )}
                    </div>
                </div>

                
            </div>

            {/* ── Custom CSS for animations ── */}
            <style>{`
                @keyframes slideIn {
                    from {
                        transform: translateX(100%);
                        opacity: 0;
                    }
                    to {
                        transform: translateX(0);
                        opacity: 1;
                    }
                }
                .animate-slide-in {
                    animation: slideIn 0.3s ease-out;
                }
            `}</style>
        </AuthenticatedLayout>
    );
}