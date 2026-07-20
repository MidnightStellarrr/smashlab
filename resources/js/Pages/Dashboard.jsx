import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';



export default function Dashboard({ auth }) {
    const user = auth.user;

    // Sample data (replace with real data from backend)
    const stats = {
        bookings: 12,
        classes: 8,
        rating: 4.8,
        members: 500,
    };

    const upcomingBookings = [
        { id: 1, court: 'Court 3', date: 'Today', time: '6:00 PM - 8:00 PM', players: 2 },
        { id: 2, court: 'Court 1', date: 'Tomorrow', time: '10:00 AM - 12:00 PM', players: 4 },
        { id: 3, court: 'Court 5', date: 'June 30, 2026', time: '4:00 PM - 6:00 PM', players: 6 },
    ];

    const activeClasses = [
        { id: 1, name: 'Beginner Class', coach: 'Coach Mike', schedule: 'Mon/Wed/Fri', time: '6:00 PM' },
        { id: 2, name: 'Advanced Class', coach: 'Coach Alex', schedule: 'Weekends', time: '6:00 PM' },
    ];

    return (
        <AuthenticatedLayout
            header={<h2 className="text-xl font-semibold text-gray-800 dark:text-white">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                {/* ── Welcome Section ── */}
                <div className="mb-8 rounded-2xl bg-white shadow-sm p-6 border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <div className="flex flex-wrap items-center justify-between gap-4">
                        <div>
                            <h1 className="text-2xl font-bold text-gray-800 dark:text-white">
                                Welcome back, {user.name}!
                            </h1>
                            <p className="text-sm text-gray-600 dark:text-gray-300">
                                You have {upcomingBookings.length} upcoming bookings and {activeClasses.length} active classes.
                            </p>
                        </div>
                        <div className="flex gap-3">
                            <a
                                href={route('book_now')}
                                className="rounded-full bg-blue-600 px-6 py-2 text-sm font-semibold text-white transition hover:bg-blue-700"
                            >
                                Book a Court
                            </a>
                            <a
                                href={route('classes')}
                                className="rounded-full border border-gray-300 px-6 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700"
                            >
                                Join a Class
                            </a>
                        </div>
                    </div>
                </div>

                {/* ── Quick Stats ── */}
                <div className="mb-8 grid grid-cols-2 gap-4 sm:grid-cols-4">
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">{stats.bookings}</p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Total Bookings</p>
                    </div>
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">{stats.classes}</p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Classes Attended</p>
                    </div>
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">{stats.rating}</p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Avg. Rating</p>
                    </div>
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">{stats.members}+</p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Active Members</p>
                    </div>
                </div>

                {/* ── Two Column Layout ── */}
                <div className="grid grid-cols-1 gap-8 lg:grid-cols-2">

                    {/* ── Upcoming Bookings ── */}
                    <div className="rounded-2xl bg-white shadow-sm p-6 border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <div className="mb-4 flex items-center justify-between">
                            <h2 className="text-lg font-semibold text-gray-800 dark:text-white">Upcoming Bookings</h2>
                            <Link
                                href={route('mybookings')}
                                className="text-sm text-blue-600 transition hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300"
                            >
                                View All
                            </Link>
                        </div>

                        {upcomingBookings.length > 0 ? (
                            <div className="space-y-3">
                                {upcomingBookings.map((booking) => (
                                    <div
                                        key={booking.id}
                                        className="flex items-center justify-between rounded-xl bg-gray-50 p-4 transition hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600"
                                    >
                                        <div>
                                            <p className="font-medium text-gray-800 dark:text-white">{booking.court}</p>
                                            <p className="text-sm text-gray-600 dark:text-gray-300">
                                                {booking.date} • {booking.time}
                                            </p>
                                            <p className="text-xs text-gray-500 dark:text-gray-400">
                                                {booking.players} players
                                            </p>
                                        </div>
                                        <span className="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700 dark:bg-green-900 dark:text-green-300">
                                            Confirmed
                                        </span>
                                    </div>
                                ))}
                            </div>
                        ) : (
                            <p className="text-center text-gray-500 dark:text-gray-400">No upcoming bookings.</p>
                        )}
                    </div>

                    {/* ── Active Classes ── */}
                    <div className="rounded-2xl bg-white shadow-sm p-6 border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <div className="mb-4 flex items-center justify-between">
                            <h2 className="text-lg font-semibold text-gray-800 dark:text-white">Active Classes</h2>
                            <Link
                                href={route('myclasses')}
                                className="text-sm text-blue-600 transition hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300"
                            >
                                View All
                            </Link>
                        </div>

                        {activeClasses.length > 0 ? (
                            <div className="space-y-3">
                                {activeClasses.map((cls) => (
                                    <div
                                        key={cls.id}
                                        className="flex items-center justify-between rounded-xl bg-gray-50 p-4 transition hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600"
                                    >
                                        <div>
                                            <p className="font-medium text-gray-800 dark:text-white">{cls.name}</p>
                                            <p className="text-sm text-gray-600 dark:text-gray-300">
                                                {cls.coach} • {cls.schedule}
                                            </p>
                                            <p className="text-xs text-gray-500 dark:text-gray-400">
                                                {cls.time}
                                            </p>
                                        </div>
                                        <span className="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700 dark:bg-blue-900 dark:text-blue-300">
                                            Active
                                        </span>
                                    </div>
                                ))}
                            </div>
                        ) : (
                            <p className="text-center text-gray-500 dark:text-gray-400">No active classes.</p>
                        )}
                    </div>

                </div>

            </div>
        </AuthenticatedLayout>
    );
}