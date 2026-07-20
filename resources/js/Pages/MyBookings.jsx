import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
import { useState } from 'react';

export default function MyBookings({ auth }) {
    const user = auth.user;

    // Sample booking data (replace with real data from backend)
    const [bookings, setBookings] = useState([
        {
            id: 1,
            court: 'Court 3',
            date: '2026-07-20',
            time: '6:00 PM - 8:00 PM',
            players: 2,
            status: 'confirmed',
            price: '$45.00',
        },
        {
            id: 2,
            court: 'Court 1',
            date: '2026-07-22',
            time: '10:00 AM - 12:00 PM',
            players: 4,
            status: 'pending',
            price: '$60.00',
        },
        {
            id: 3,
            court: 'Court 5',
            date: '2026-07-25',
            time: '4:00 PM - 6:00 PM',
            players: 6,
            status: 'confirmed',
            price: '$75.00',
        },
        {
            id: 4,
            court: 'Court 2',
            date: '2026-07-18',
            time: '2:00 PM - 4:00 PM',
            players: 2,
            status: 'completed',
            price: '$45.00',
        },
        {
            id: 5,
            court: 'Court 4',
            date: '2026-07-15',
            time: '7:00 PM - 9:00 PM',
            players: 4,
            status: 'cancelled',
            price: '$0.00',
        },
    ]);

    const getStatusBadge = (status) => {
        const statusMap = {
            confirmed: 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300',
            pending: 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-300',
            completed: 'bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-300',
            cancelled: 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300',
        };
        return statusMap[status] || statusMap.pending;
    };

    const getStatusText = (status) => {
        return status.charAt(0).toUpperCase() + status.slice(1);
    };

    return (
        <AuthenticatedLayout
            header={<h2 className="text-xl font-semibold text-gray-800 dark:text-white">My Bookings</h2>}
        >
            <Head title="My Bookings" />

            <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                {/* ── Header Section ── */}
                <div className="mb-8 rounded-2xl bg-white shadow-sm p-6 border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <div className="flex flex-wrap items-center justify-between gap-4">
                        <div>
                            <h1 className="text-2xl font-bold text-gray-800 dark:text-white">
                                Your Bookings
                            </h1>
                            <p className="text-sm text-gray-600 dark:text-gray-300">
                                You have {bookings.filter(b => b.status === 'confirmed' || b.status === 'pending').length} active bookings.
                            </p>
                        </div>
                        <Link
                            href="/book_now"
                            className="rounded-full bg-blue-600 px-6 py-2 text-sm font-semibold text-white transition hover:bg-blue-700"
                        >
                            + Book New Court
                        </Link>
                    </div>
                </div>

                {/* ── Stats Summary ── */}
                <div className="mb-8 grid grid-cols-2 gap-4 sm:grid-cols-4">
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">
                            {bookings.filter(b => b.status === 'confirmed').length}
                        </p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Confirmed</p>
                    </div>
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">
                            {bookings.filter(b => b.status === 'pending').length}
                        </p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Pending</p>
                    </div>
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">
                            {bookings.filter(b => b.status === 'completed').length}
                        </p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Completed</p>
                    </div>
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">
                            {bookings.filter(b => b.status === 'cancelled').length}
                        </p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Cancelled</p>
                    </div>
                </div>

                {/* ── Bookings List ── */}
                <div className="rounded-2xl bg-white shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                    <div className="overflow-x-auto">
                        <table className="w-full text-sm">
                            <thead className="bg-gray-50 text-gray-700 dark:bg-gray-700 dark:text-gray-300">
                                <tr>
                                    <th className="px-6 py-4 text-left font-semibold">Court</th>
                                    <th className="px-6 py-4 text-left font-semibold">Date</th>
                                    <th className="px-6 py-4 text-left font-semibold">Time</th>
                                    <th className="px-6 py-4 text-left font-semibold">Players</th>
                                    <th className="px-6 py-4 text-left font-semibold">Price</th>
                                    <th className="px-6 py-4 text-left font-semibold">Status</th>
                                    <th className="px-6 py-4 text-left font-semibold">Action</th>
                                </tr>
                            </thead>
                            <tbody className="divide-y divide-gray-200 dark:divide-gray-700">
                                {bookings.length > 0 ? (
                                    bookings.map((booking) => (
                                        <tr key={booking.id} className="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                                            <td className="px-6 py-4 text-gray-800 dark:text-white font-medium">
                                                {booking.court}
                                            </td>
                                            <td className="px-6 py-4 text-gray-600 dark:text-gray-300">
                                                {new Date(booking.date).toLocaleDateString('en-US', {
                                                    weekday: 'short',
                                                    month: 'short',
                                                    day: 'numeric',
                                                    year: 'numeric',
                                                })}
                                            </td>
                                            <td className="px-6 py-4 text-gray-600 dark:text-gray-300">
                                                {booking.time}
                                            </td>
                                            <td className="px-6 py-4 text-gray-600 dark:text-gray-300">
                                                {booking.players} {booking.players === 1 ? 'player' : 'players'}
                                            </td>
                                            <td className="px-6 py-4 text-gray-800 dark:text-white font-medium">
                                                {booking.price}
                                            </td>
                                            <td className="px-6 py-4">
                                                <span className={`rounded-full px-3 py-1 text-xs font-medium ${getStatusBadge(booking.status)}`}>
                                                    {getStatusText(booking.status)}
                                                </span>
                                            </td>
                                            <td className="px-6 py-4">
                                                {booking.status === 'confirmed' && (
                                                    <Link
                                                        href="#"
                                                        className="text-sm text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300"
                                                    >
                                                        View Details
                                                    </Link>
                                                )}
                                                {booking.status === 'pending' && (
                                                    <Link
                                                        href="#"
                                                        className="text-sm text-yellow-600 hover:text-yellow-800 dark:text-yellow-400 dark:hover:text-yellow-300"
                                                    >
                                                        Confirm
                                                    </Link>
                                                )}
                                                {booking.status === 'completed' && (
                                                    <span className="text-sm text-gray-400 dark:text-gray-500">
                                                        Completed
                                                    </span>
                                                )}
                                                {booking.status === 'cancelled' && (
                                                    <span className="text-sm text-gray-400 dark:text-gray-500">
                                                        Cancelled
                                                    </span>
                                                )}
                                            </td>
                                        </tr>
                                    ))
                                ) : (
                                    <tr>
                                        <td colSpan="7" className="px-6 py-8 text-center text-gray-500 dark:text-gray-400">
                                            <i className="fa-solid fa-calendar-xmark text-4xl mb-3 block"></i>
                                            No bookings found. Start booking your first court!
                                        </td>
                                    </tr>
                                )}
                            </tbody>
                        </table>
                    </div>
                </div>

                {/* ── Quick Action ── */}
                <div className="mt-8 rounded-2xl bg-white shadow-sm p-6 border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <h2 className="mb-4 text-lg font-semibold text-gray-800 dark:text-white">Need to Book?</h2>
                    <div className="flex flex-wrap gap-4">
                        <Link
                            href="/book_now"
                            className="rounded-full bg-blue-600 px-6 py-2 text-sm font-semibold text-white transition hover:bg-blue-700"
                        >
                            Book a Court
                        </Link>
                        <Link
                            href="/classes"
                            className="rounded-full border border-gray-300 px-6 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700"
                        >
                            Browse Classes
                        </Link>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}