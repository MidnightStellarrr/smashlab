import Dropdown from '@/Components/Dropdown';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { Link, usePage } from '@inertiajs/react';
import { useEffect, useState } from 'react';

export default function AuthenticatedLayout({ header, children }) {
    const user = usePage().props.auth.user;
    const [showingNavigationDropdown, setShowingNavigationDropdown] = useState(false);
    const [sidebarOpen, setSidebarOpen] = useState(false);
    const [darkMode, setDarkMode] = useState(() => {
        if (typeof window === 'undefined') {
            return false;
        }

        return document.documentElement.classList.contains('dark');
    });

    useEffect(() => {
        const root = document.documentElement;
        const storedTheme = localStorage.getItem('smashlab-theme');

        if (storedTheme) {
            const isDark = storedTheme === 'dark';
            root.classList.toggle('dark', isDark);
            setDarkMode(isDark);
        } else {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            root.classList.toggle('dark', prefersDark);
            setDarkMode(prefersDark);
        }
    }, []);

    const toggleDarkMode = () => {
        const root = document.documentElement;
        const nextDarkMode = !darkMode;

        root.classList.toggle('dark', nextDarkMode);
        localStorage.setItem('smashlab-theme', nextDarkMode ? 'dark' : 'light');
        setDarkMode(nextDarkMode);
    };


    const navigation = [
        { name: 'Dashboard', href: route('dashboard'), icon: 'fa-solid fa-chart-pie', isInertia: true },
        { name: 'Book Court', href: route('book_now'), icon: 'fa-solid fa-calendar-check', isInertia: false },
        { name: 'My Bookings', href: '#', icon: 'fa-solid fa-bookmark', isInertia: false },
        { name: 'Enroll Class', href: route('classes'), icon: 'fa-solid fa-chalkboard-user', isInertia: false },
        { name: 'Shop', href: route('shop'), icon: 'fa-solid fa-store', isInertia: false },
        { name: 'Profile', href: route('profile.edit'), icon: 'fa-solid fa-user', isInertia: true },
    ];

    const essentials = [
        { name: 'Homepage', href: '/', icon: 'fa-solid fa-house', isInertia: false },
        { name: 'Settings', href: '#settings', icon: 'fa-solid fa-gear', isInertia: false },
        { name: 'Help & Support', href: '#help-support', icon: 'fa-solid fa-circle-question', isInertia: false },
    ];

    return (
        <div className="flex min-h-screen bg-gray-100">
            {/* ── Sidebar ── */}
            <aside
                className={`fixed inset-y-0 left-0 z-50 w-64 transform bg-gradient-to-b from-[#0a1628] to-[#1a2a4a] transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static ${
                    sidebarOpen ? 'translate-x-0' : '-translate-x-full'
                }`}
            >
                <div className="flex h-full flex-col">
                    {/* Logo - moved to very left */}
                    <div className="flex items-center border-b border-white/10 px-4 py-6">
                        <Link href="/" className="flex items-center gap-2">
                            <img src="/images/logo.png" className="h-12 w-auto pt-1" alt="SmashLab" />
                            <span className="text-[28px] font-bold text-white">SmashLab</span>
                        </Link>
                    </div>

                    {/* Navigation */}
                    <nav className="flex-1 space-y-1 px-3 py-4 overflow-y-auto">
                        <p className="px-3 text-xs font-semibold uppercase tracking-wider text-gray-500">
                            Main
                        </p>
                        {navigation.map((item) => (
                            item.isInertia ? (
                                <Link
                                    key={item.name}
                                    href={item.href}
                                    className={`flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition ${
                                        route().current(item.href)
                                            ? 'bg-white/10 text-white'
                                            : 'text-gray-300 hover:bg-white/5 hover:text-white'
                                    }`}
                                >
                                    <i className={`${item.icon} w-5 text-center`}></i>
                                    {item.name}
                                </Link>
                            ) : (
                                <a
                                    key={item.name}
                                    href={item.href}
                                    className="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-gray-300 transition hover:bg-white/5 hover:text-white"
                                >
                                    <i className={`${item.icon} w-5 text-center`}></i>
                                    {item.name}
                                </a>
                            )
                        ))}

                        <div className="my-4 border-t border-white/10 -mx-3"></div>
                        <br></br>

                        <p className="px-3 text-xs font-semibold uppercase tracking-wider text-gray-500">
                            Others
                        </p>
                        {essentials.map((item) => (
                            <a
                                key={item.name}
                                href={item.href}
                                className="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-gray-300 transition hover:bg-white/5 hover:text-white"
                            >
                                <i className={`${item.icon} w-5 text-center`}></i>
                                {item.name}
                            </a>
                        ))}
                    </nav>

                    {/* User Section with Logout */}
                    <div className="border-t border-white/10 p-4">
                        <div className="flex items-center gap-3">
                            <div className="flex h-9 w-9 items-center justify-center rounded-full bg-white/10 text-white">
                                {user.name.charAt(0).toUpperCase()}
                            </div>
                            <div className="flex-1">
                                <p className="text-sm font-medium text-white">{user.name}</p>
                                <p className="text-xs text-gray-400">{user.email}</p>
                            </div>
                        </div>
                        {/* Logout Button */}
                        <Link
                            href={route('logout')}
                            method="post"
                            as="button"
                            className="mt-3 flex w-full items-center justify-center gap-2 rounded-lg bg-white/10 px-3 py-2 text-sm font-medium text-white transition hover:bg-white/20"
                        >
                            <i className="fa-solid fa-right-from-bracket"></i>
                            Logout
                        </Link>
                    </div>
                </div>
            </aside>

            {/* ── Main Content ── */}
            <div className="flex-1">
                {/* Mobile Header */}
                <header className="border-b border-white/10 bg-white/5 backdrop-blur-sm lg:hidden">
                    <div className="flex h-16 items-center justify-between px-4">
                        <button
                            onClick={() => setSidebarOpen(!sidebarOpen)}
                            className="text-white transition hover:text-gray-300"
                        >
                            <i className="fa-solid fa-bars text-xl"></i>
                        </button>
                        <Link href="/" className="flex items-center gap-2">
                            <img src="/images/logo.png" className="h-8 w-auto" alt="SmashLab" />
                            <span className="text-lg font-bold text-white">SmashLab</span>
                        </Link>
                        <div className="w-8"></div>
                    </div>
                </header>

                {/* Page Content */}
                <main className="min-h-screen">
                    {/* Header */}
                    {header && (
                        <header className="border-b border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-slate-900">
                            <div className="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-6 sm:px-6 lg:px-8">
                                <div className="flex items-center gap-3">
                                    <h2 className="text-xl font-semibold text-gray-800 dark:text-white">{header}</h2>
                                </div>

                                <div className="flex items-center gap-3">
                                    <button
                                        type="button"
                                        className="flex h-10 w-10 items-center justify-center rounded-full border border-slate-700 bg-slate-800 text-white transition hover:border-blue-400 hover:text-blue-300"
                                        aria-label="Notifications"
                                    >
                                        <i className="fa-solid fa-bell text-sm"></i>
                                    </button>

                                    <button
                                        type="button"
                                        onClick={toggleDarkMode}
                                        className="flex h-10 w-10 items-center justify-center rounded-full border border-slate-700 bg-slate-800 text-white transition hover:border-blue-400 hover:text-blue-300"
                                        aria-label="Toggle dark mode"
                                    >
                                        <i className={`text-sm ${darkMode ? 'fa-solid fa-sun' : 'fa-solid fa-moon'}`}></i>
                                    </button>

                                    <Link
                                        href={route('profile.edit')}
                                        className="flex items-center gap-3 rounded-full border border-gray-200 bg-white px-2 py-1.5 pr-4 transition hover:border-blue-500 hover:shadow-sm dark:border-gray-700 dark:bg-slate-800"
                                    >
                                        <div className="flex h-9 w-9 items-center justify-center rounded-full bg-blue-600 text-sm font-semibold text-white">
                                            {user.name.charAt(0).toUpperCase()}
                                        </div>
                                        <div className="hidden text-left sm:block">
                                            <p className="text-sm font-semibold text-gray-800 dark:text-white">{user.name}</p>
                                            <p className="text-xs text-gray-500 dark:text-gray-300">{user.email}</p>
                                        </div>
                                    </Link>
                                </div>
                            </div>
                        </header>
                    )}

                    {/* Children */}
                    <div className="py-8">{children}</div>
                </main>
            </div>

            {/* Mobile Overlay */}
            {sidebarOpen && (
                <div
                    className="fixed inset-0 z-40 bg-black/50 lg:hidden"
                    onClick={() => setSidebarOpen(false)}
                ></div>
            )}
        </div>
    );
}