import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';

export default function HelpSupport() {
    return (
        <AuthenticatedLayout header={<h2 className="text-xl font-semibold text-white">Help & Support</h2>}>
            <Head title="Help & Support" />

            <div className="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
                <div className="rounded-2xl bg-white p-6 shadow-sm border border-gray-200">
                    <h1 className="text-2xl font-bold text-gray-800">Help & Support</h1>
                    <p className="mt-2 text-sm text-gray-600">
                        Need help? Check our guides, contact support, or review common booking questions.
                    </p>

                    <div className="mt-6 grid gap-4 md:grid-cols-2">
                        <div className="rounded-xl bg-gray-50 p-4">
                            <h2 className="font-semibold text-gray-800">Booking Help</h2>
                            <p className="mt-1 text-sm text-gray-600">Review court bookings, timing, and confirmations.</p>
                        </div>
                        <div className="rounded-xl bg-gray-50 p-4">
                            <h2 className="font-semibold text-gray-800">Account Support</h2>
                            <p className="mt-1 text-sm text-gray-600">Update your profile, reset access, and manage account preferences.</p>
                        </div>
                    </div>

                    <div className="mt-6">
                        <Link
                            href={route('dashboard')}
                            className="rounded-full bg-blue-600 px-5 py-2 text-sm font-semibold text-white transition hover:bg-blue-700"
                        >
                            Back to Dashboard
                        </Link>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
