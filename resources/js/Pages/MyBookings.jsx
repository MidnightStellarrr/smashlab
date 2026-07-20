import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
import { useState, useEffect } from 'react';



export default function MyBookings({ auth }) {
    const user = auth.user;

    // Sample booking data with timestamps and expiry
    const [bookings, setBookings] = useState([
        {
            id: 1,
            court: 'Court 3',
            date: '2026-07-20',
            time: '6:00 PM - 8:00 PM',
            players: 2,
            status: 'confirmed',
            price: '$45.00',
            bookingRef: 'BK-2026-001',
            notes: 'Indoor court, near the entrance',
            createdAt: new Date(Date.now() - 1000 * 60 * 5),
            expiresAt: new Date(Date.now() + 1000 * 60 * 15),
            canCancel: true,
            cancellationDeadline: new Date(Date.now() + 1000 * 60 * 60 * 2),
        },
        {
            id: 2,
            court: 'Court 1',
            date: '2026-07-22',
            time: '10:00 AM - 12:00 PM',
            players: 4,
            status: 'pending',
            price: '$60.00',
            bookingRef: 'BK-2026-002',
            notes: 'Outdoor court, bring sunscreen',
            createdAt: new Date(Date.now() - 1000 * 60 * 2),
            expiresAt: new Date(Date.now() + 1000 * 60 * 13),
            canCancel: false,
            cancellationDeadline: null,
        },
        {
            id: 3,
            court: 'Court 5',
            date: '2026-07-25',
            time: '4:00 PM - 6:00 PM',
            players: 6,
            status: 'confirmed',
            price: '$75.00',
            bookingRef: 'BK-2026-003',
            notes: 'Premium court with night lighting',
            createdAt: new Date(Date.now() - 1000 * 60 * 30),
            expiresAt: new Date(Date.now() + 1000 * 60 * 5),
            canCancel: true,
            cancellationDeadline: new Date(Date.now() + 1000 * 60 * 60 * 1),
        },
        {
            id: 4,
            court: 'Court 2',
            date: '2026-07-18',
            time: '2:00 PM - 4:00 PM',
            players: 2,
            status: 'completed',
            price: '$45.00',
            bookingRef: 'BK-2026-004',
            notes: 'Completed successfully',
            createdAt: new Date(Date.now() - 1000 * 60 * 60 * 24),
            expiresAt: null,
            canCancel: false,
            cancellationDeadline: null,
        },
        {
            id: 5,
            court: 'Court 4',
            date: '2026-07-15',
            time: '7:00 PM - 9:00 PM',
            players: 4,
            status: 'cancelled',
            price: '$0.00',
            bookingRef: 'BK-2026-005',
            notes: 'Cancelled due to weather',
            createdAt: new Date(Date.now() - 1000 * 60 * 60 * 48),
            expiresAt: null,
            canCancel: false,
            cancellationDeadline: null,
        },
    ]);

    // State for modals
    const [selectedBooking, setSelectedBooking] = useState(null);
    const [showDetailsModal, setShowDetailsModal] = useState(false);
    const [showConfirmModal, setShowConfirmModal] = useState(false);
    const [showCancelModal, setShowCancelModal] = useState(false);
    const [bookingToConfirm, setBookingToConfirm] = useState(null);
    const [bookingToCancel, setBookingToCancel] = useState(null);
    const [showToast, setShowToast] = useState(false);
    const [toastMessage, setToastMessage] = useState('');
    const [toastType, setToastType] = useState('success');

    // Auto-expire pending bookings
    useEffect(() => {
        const interval = setInterval(() => {
            const now = new Date();
            let updated = false;

            setBookings(prevBookings => 
                prevBookings.map(booking => {
                    if (booking.status === 'pending' && booking.expiresAt && new Date(booking.expiresAt) < now) {
                        updated = true;
                        setToastMessage(`Booking for ${booking.court} has expired. Please book again.`);
                        setToastType('warning');
                        setShowToast(true);
                        setTimeout(() => setShowToast(false), 5000);
                        return { ...booking, status: 'expired' };
                    }
                    return booking;
                })
            );

            if (updated) {
                // Refresh the bookings list
            }
        }, 10000);

        return () => clearInterval(interval);
    }, []);

    const isAboutToExpire = (booking) => {
        if (booking.status !== 'pending' || !booking.expiresAt) return false;
        const now = new Date();
        const timeLeft = new Date(booking.expiresAt) - now;
        return timeLeft > 0 && timeLeft < 1000 * 60 * 2;
    };

    const getTimeRemaining = (expiresAt) => {
        const now = new Date();
        const diff = new Date(expiresAt) - now;
        if (diff <= 0) return 'Expired';
        const minutes = Math.floor(diff / 1000 / 60);
        const seconds = Math.floor((diff / 1000) % 60);
        if (minutes > 0) {
            return `${minutes}m ${seconds}s remaining`;
        }
        return `${seconds}s remaining`;
    };

    const getStatusBadge = (status) => {
        const statusMap = {
            confirmed: 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300',
            pending: 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-300',
            completed: 'bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-300',
            cancelled: 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300',
            expired: 'bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-300',
        };
        return statusMap[status] || statusMap.pending;
    };

    const getStatusText = (status) => {
        return status.charAt(0).toUpperCase() + status.slice(1);
    };

    const handleViewDetails = (booking) => {
        setSelectedBooking(booking);
        setShowDetailsModal(true);
    };

    const handleConfirmClick = (booking) => {
        setBookingToConfirm(booking);
        setShowConfirmModal(true);
    };

    const handleConfirmBooking = () => {
        setBookings(bookings.map(b => 
            b.id === bookingToConfirm.id 
                ? { ...b, status: 'confirmed' } 
                : b
        ));
        
        setToastMessage(`Booking for ${bookingToConfirm.court} confirmed successfully!`);
        setToastType('success');
        setShowToast(true);
        
        setShowConfirmModal(false);
        setBookingToConfirm(null);
        
        setTimeout(() => {
            setShowToast(false);
        }, 3000);
    };

    const handleCancelClick = (booking) => {
        setBookingToCancel(booking);
        setShowCancelModal(true);
    };

    const handleCancelBooking = () => {
        setBookings(bookings.map(b => 
            b.id === bookingToCancel.id 
                ? { ...b, status: 'cancelled' } 
                : b
        ));
        
        setToastMessage(`Booking for ${bookingToCancel.court} has been cancelled.`);
        setToastType('info');
        setShowToast(true);
        
        setShowCancelModal(false);
        setBookingToCancel(null);
        
        setTimeout(() => {
            setShowToast(false);
        }, 3000);
    };

    const canCancelBooking = (booking) => {
        if (booking.status !== 'confirmed') return false;
        if (!booking.cancellationDeadline) return true;
        return new Date(booking.cancellationDeadline) > new Date();
    };

    const closeDetailsModal = () => {
        setShowDetailsModal(false);
        setSelectedBooking(null);
    };

    const closeConfirmModal = () => {
        setShowConfirmModal(false);
        setBookingToConfirm(null);
    };

    const closeCancelModal = () => {
        setShowCancelModal(false);
        setBookingToCancel(null);
    };

    return (
        <AuthenticatedLayout
            header={<h2 className="text-xl font-semibold text-gray-800 dark:text-white">My Bookings</h2>}
        >
            <Head title="My Bookings" />

            {/* ── Toast Notification ── */}
            {showToast && (
                <div className="fixed top-4 right-4 z-50 animate-slide-in">
                    <div className={`rounded-2xl px-6 py-4 shadow-lg flex items-center gap-3 ${
                        toastType === 'success' ? 'bg-green-500 text-white' :
                        toastType === 'warning' ? 'bg-yellow-500 text-white' :
                        'bg-blue-500 text-white'
                    }`}>
                        <i className={`fa-solid ${
                            toastType === 'success' ? 'fa-check-circle' :
                            toastType === 'warning' ? 'fa-clock' :
                            'fa-info-circle'
                        } text-xl`}></i>
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

            <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                {/* ── Header Section ── */}
                <div className="mb-8 rounded-2xl bg-white shadow-sm p-6 border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <div className="flex flex-wrap items-center justify-between gap-4">
                        <div>
                            <h1 className="text-2xl font-bold text-gray-800 dark:text-white">
                                Your Bookings
                            </h1>
                            <p className="text-sm text-gray-600 dark:text-gray-300">
                                You have {bookings.filter(b => b.status === 'confirmed').length} confirmed, 
                                {bookings.filter(b => b.status === 'pending').length} pending bookings.
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
                <div className="mb-8 grid grid-cols-2 gap-4 sm:grid-cols-5">
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
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">
                            {bookings.filter(b => b.status === 'expired').length}
                        </p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Expired</p>
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
                                    <th className="px-6 py-4 text-center font-semibold">Status</th>
                                    <th className="px-6 py-4 text-left font-semibold">Action</th>
                                </tr>
                            </thead>
                            <tbody className="divide-y divide-gray-200 dark:divide-gray-700">
                                {bookings.length > 0 ? (
                                    bookings.map((booking) => (
                                        <tr key={booking.id} className="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                                            <td className="px-6 py-4 text-gray-800 dark:text-white font-medium">
                                                {booking.court}
                                                {isAboutToExpire(booking) && (
                                                    <span className="ml-2 inline-block animate-pulse text-xs text-yellow-600 dark:text-yellow-400">
                                                        ⏳ Expiring soon
                                                    </span>
                                                )}
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
                                            <td className="px-6 py-4 text-center">
                                                <div className="flex flex-col items-center gap-1">
                                                    <span className={`rounded-full px-3 py-1 text-xs font-medium inline-block ${getStatusBadge(booking.status)}`}>
                                                        {getStatusText(booking.status)}
                                                    </span>
                                                    {booking.status === 'pending' && booking.expiresAt && (
                                                        <span className="text-[10px] text-gray-500 dark:text-gray-400">
                                                            {getTimeRemaining(booking.expiresAt)}
                                                        </span>
                                                    )}
                                                </div>
                                            </td>
                                            <td className="px-6 py-4">
                                                <button
                                                    onClick={() => handleViewDetails(booking)}
                                                    className="text-sm text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300"
                                                >
                                                    View Details
                                                </button>
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

                {/* ── View Details Modal ── */}
                {showDetailsModal && selectedBooking && (
                    <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">
                        <div className="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl w-full max-w-md p-6 border border-gray-200 dark:border-gray-700 animate-scale-in max-h-[90vh] overflow-y-auto">
                            <div className="flex items-center justify-between mb-4">
                                <h3 className="text-xl font-bold text-gray-800 dark:text-white">Booking Details</h3>
                                <button
                                    onClick={closeDetailsModal}
                                    className="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"
                                >
                                    <i className="fa-solid fa-xmark text-xl"></i>
                                </button>
                            </div>
                            
                            <div className="space-y-3">
                                <div className="flex justify-between py-2 border-b border-gray-100 dark:border-gray-700">
                                    <span className="text-gray-600 dark:text-gray-400">Court</span>
                                    <span className="font-medium text-gray-800 dark:text-white">{selectedBooking.court}</span>
                                </div>
                                <div className="flex justify-between py-2 border-b border-gray-100 dark:border-gray-700">
                                    <span className="text-gray-600 dark:text-gray-400">Date</span>
                                    <span className="font-medium text-gray-800 dark:text-white">
                                        {new Date(selectedBooking.date).toLocaleDateString('en-US', {
                                            weekday: 'long',
                                            month: 'long',
                                            day: 'numeric',
                                            year: 'numeric',
                                        })}
                                    </span>
                                </div>
                                <div className="flex justify-between py-2 border-b border-gray-100 dark:border-gray-700">
                                    <span className="text-gray-600 dark:text-gray-400">Time</span>
                                    <span className="font-medium text-gray-800 dark:text-white">{selectedBooking.time}</span>
                                </div>
                                <div className="flex justify-between py-2 border-b border-gray-100 dark:border-gray-700">
                                    <span className="text-gray-600 dark:text-gray-400">Players</span>
                                    <span className="font-medium text-gray-800 dark:text-white">{selectedBooking.players}</span>
                                </div>
                                <div className="flex justify-between py-2 border-b border-gray-100 dark:border-gray-700">
                                    <span className="text-gray-600 dark:text-gray-400">Price</span>
                                    <span className="font-medium text-gray-800 dark:text-white">{selectedBooking.price}</span>
                                </div>
                                <div className="flex justify-between py-2 border-b border-gray-100 dark:border-gray-700">
                                    <span className="text-gray-600 dark:text-gray-400">Status</span>
                                    <span className={`rounded-full px-3 py-1 text-xs font-medium ${getStatusBadge(selectedBooking.status)}`}>
                                        {getStatusText(selectedBooking.status)}
                                    </span>
                                </div>
                                <div className="flex justify-between py-2 border-b border-gray-100 dark:border-gray-700">
                                    <span className="text-gray-600 dark:text-gray-400">Booking Reference</span>
                                    <span className="font-mono text-sm font-medium text-gray-800 dark:text-white">
                                        {selectedBooking.bookingRef || 'N/A'}
                                    </span>
                                </div>
                                {selectedBooking.status === 'pending' && selectedBooking.expiresAt && (
                                    <div className="flex justify-between py-2">
                                        <span className="text-gray-600 dark:text-gray-400">Time Remaining</span>
                                        <span className="font-medium text-yellow-600 dark:text-yellow-400">
                                            {getTimeRemaining(selectedBooking.expiresAt)}
                                        </span>
                                    </div>
                                )}
                                {selectedBooking.notes && (
                                    <div className="flex justify-between py-2">
                                        <span className="text-gray-600 dark:text-gray-400">Notes</span>
                                        <span className="font-medium text-gray-800 dark:text-white">{selectedBooking.notes}</span>
                                    </div>
                                )}
                            </div>

                            <div className="mt-6 flex flex-wrap gap-3">
                                <button
                                    onClick={closeDetailsModal}
                                    className="flex-1 rounded-full bg-gray-200 px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600"
                                >
                                    Close
                                </button>
                                {selectedBooking.status === 'pending' && (
                                    <button
                                        onClick={() => {
                                            closeDetailsModal();
                                            handleConfirmClick(selectedBooking);
                                        }}
                                        className="flex-1 rounded-full bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700"
                                    >
                                        <i className="fa-solid fa-check mr-2"></i>
                                        Confirm Booking
                                    </button>
                                )}
                                {selectedBooking.status === 'confirmed' && canCancelBooking(selectedBooking) && (
                                    <button
                                        onClick={() => {
                                            closeDetailsModal();
                                            handleCancelClick(selectedBooking);
                                        }}
                                        className="flex-1 rounded-full bg-red-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-red-700"
                                    >
                                        <i className="fa-solid fa-xmark mr-2"></i>
                                        Cancel Booking
                                    </button>
                                )}
                            </div>
                        </div>
                    </div>
                )}

                {/* ── Confirm Booking Modal ── */}
                {showConfirmModal && bookingToConfirm && (
                    <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">
                        <div className="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl w-full max-w-md p-6 border border-gray-200 dark:border-gray-700 animate-scale-in">
                            <div className="text-center">
                                <div className="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-yellow-100 dark:bg-yellow-900/30 mb-4">
                                    <i className="fa-solid fa-triangle-exclamation text-2xl text-yellow-600 dark:text-yellow-400"></i>
                                </div>
                                <h3 className="text-xl font-bold text-gray-800 dark:text-white">Confirm Booking</h3>
                                <p className="mt-2 text-sm text-gray-600 dark:text-gray-300">
                                    Are you sure you want to confirm your booking for <span className="font-semibold">{bookingToConfirm.court}</span> on{' '}
                                    {new Date(bookingToConfirm.date).toLocaleDateString('en-US', {
                                        weekday: 'long',
                                        month: 'long',
                                        day: 'numeric',
                                        year: 'numeric',
                                    })}?
                                </p>
                                <p className="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                    Total: {bookingToConfirm.price}
                                </p>
                                {bookingToConfirm.expiresAt && (
                                    <p className="mt-2 text-xs text-yellow-600 dark:text-yellow-400">
                                        ⏳ This booking will expire in {getTimeRemaining(bookingToConfirm.expiresAt)}
                                    </p>
                                )}
                            </div>

                            <div className="mt-6 flex gap-3">
                                <button
                                    onClick={closeConfirmModal}
                                    className="flex-1 rounded-full bg-gray-200 px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600"
                                >
                                    Cancel
                                </button>
                                <button
                                    onClick={handleConfirmBooking}
                                    className="flex-1 rounded-full bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700"
                                >
                                    <i className="fa-solid fa-check mr-2"></i>
                                    Confirm
                                </button>
                            </div>
                        </div>
                    </div>
                )}

                {/* ── Cancel Booking Modal ── */}
                {showCancelModal && bookingToCancel && (
                    <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">
                        <div className="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl w-full max-w-md p-6 border border-gray-200 dark:border-gray-700 animate-scale-in">
                            <div className="text-center">
                                <div className="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-red-100 dark:bg-red-900/30 mb-4">
                                    <i className="fa-solid fa-circle-xmark text-2xl text-red-600 dark:text-red-400"></i>
                                </div>
                                <h3 className="text-xl font-bold text-gray-800 dark:text-white">Cancel Booking</h3>
                                <p className="mt-2 text-sm text-gray-600 dark:text-gray-300">
                                    Are you sure you want to cancel your booking for <span className="font-semibold">{bookingToCancel.court}</span> on{' '}
                                    {new Date(bookingToCancel.date).toLocaleDateString('en-US', {
                                        weekday: 'long',
                                        month: 'long',
                                        day: 'numeric',
                                        year: 'numeric',
                                    })}?
                                </p>
                                <p className="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                    This action cannot be undone.
                                </p>
                                {bookingToCancel.cancellationDeadline && (
                                    <p className="mt-2 text-xs text-blue-600 dark:text-blue-400">
                                        ℹ️ You can cancel up to {Math.round((new Date(bookingToCancel.cancellationDeadline) - new Date()) / 1000 / 60)} minutes before the booking.
                                    </p>
                                )}
                            </div>

                            <div className="mt-6 flex gap-3">
                                <button
                                    onClick={closeCancelModal}
                                    className="flex-1 rounded-full bg-gray-200 px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600"
                                >
                                    Keep Booking
                                </button>
                                <button
                                    onClick={handleCancelBooking}
                                    className="flex-1 rounded-full bg-red-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-red-700"
                                >
                                    <i className="fa-solid fa-trash mr-2"></i>
                                    Cancel Booking
                                </button>
                            </div>
                        </div>
                    </div>
                )}
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
                @keyframes pulse {
                    0%, 100% {
                        opacity: 1;
                    }
                    50% {
                        opacity: 0.5;
                    }
                }
                .animate-slide-in {
                    animation: slideIn 0.3s ease-out;
                }
                .animate-scale-in {
                    animation: scaleIn 0.2s ease-out;
                }
                .animate-pulse {
                    animation: pulse 1.5s ease-in-out infinite;
                }
            `}</style>
        </AuthenticatedLayout>
    );
}