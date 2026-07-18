import Dropdown from '@/Components/Dropdown';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { Link, usePage } from '@inertiajs/react';
import { useState } from 'react';

export default function AuthenticatedLayout({ header, children }) {
    const user = usePage().props.auth.user;
    const [showingNavigationDropdown, setShowingNavigationDropdown] = useState(false);
    const [sidebarOpen, setSidebarOpen] = useState(false);

    const navigation = [
        { name: 'Dashboard', href: route('dashboard'), icon: 'fa-solid fa-chart-pie' },
        { name: 'Book Now', href: route('book_now'), icon: 'fa-solid fa-calendar-check' },
        { name: 'My Bookings', href: '#', icon: 'fa-solid fa-bookmark' },
        { name: 'Classes', href: route('classes'), icon: 'fa-solid fa-chalkboard-user' },
        { name: 'Shop', href: route('shop'), icon: 'fa-solid fa-store' },
        { name: 'Profile', href: route('profile.edit'), icon: 'fa-solid fa-user' },
    ];

    return (
        <div className="flex min-h-screen">
            {/* ── Sidebar ── */}
            <aside
                className={`fixed inset-y-0 left-0 z-50 w-64 transform bg-gradient-to-b from-[#0a1628] to-[#1a2a4a] transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static ${
                    sidebarOpen ? 'translate-x-0' : '-translate-x-full'
                }`}
            >
                <div className="flex h-full flex-col">
                    {/* Logo */}
                    <div className="flex h-16 items-center justify-center border-b border-white/10 px-4">
                        <Link href="/" className="flex items-center gap-2">
                            <img src="/images/logo.png" className="h-10 w-auto" alt="SmashLab" />
                            <span className="text-xl font-bold text-white">SmashLab</span>
                        </Link>
                    </div>

                    {/* Navigation */}
                    <nav className="flex-1 space-y-1 px-3 py-4">
                        {navigation.map((item) => (
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
                        ))}
                    </nav>

                    {/* User Section */}
                    <div className="border-t border-white/10 p-4">
                        <div className="flex items-center gap-3">
                            <div className="flex h-9 w-9 items-center justify-center rounded-full bg-white/10 text-white">
                                {user.name.charAt(0).toUpperCase()}
                            </div>
                            <div className="flex-1">
                                <p className="text-sm font-medium text-white">{user.name}</p>
                                <p className="text-xs text-gray-400">{user.email}</p>
                            </div>
                            <Link
                                href={route('logout')}
                                method="post"
                                as="button"
                                className="text-gray-400 transition hover:text-white"
                            >
                                <i className="fa-solid fa-right-from-bracket"></i>
                            </Link>
                        </div>
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
                <main className="min-h-screen bg-gradient-to-b from-[#0a1628] to-[#1a2a4a]">
                    {/* Header */}
                    {header && (
                        <header className="border-b border-white/10 bg-white/5 backdrop-blur-sm">
                            <div className="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                                <h2 className="text-xl font-semibold text-white">{header}</h2>
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