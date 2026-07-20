import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
import { useState } from 'react';

export default function MyClasses({ auth }) {
    const user = auth.user;

    // Sample class data (replace with real data from backend)
    const [classes, setClasses] = useState([
        {
            id: 1,
            name: 'Beginner Class',
            coach: 'Coach Mike',
            schedule: 'Mon/Wed/Fri',
            time: '6:00 PM - 7:30 PM',
            level: 'Beginner',
            status: 'active',
            enrolled: 12,
            maxCapacity: 20,
            progress: 65,
        },
        {
            id: 2,
            name: 'Advanced Class',
            coach: 'Coach Alex',
            schedule: 'Weekends',
            time: '6:00 PM - 8:00 PM',
            level: 'Advanced',
            status: 'active',
            enrolled: 8,
            maxCapacity: 15,
            progress: 40,
        },
        {
            id: 3,
            name: 'Intermediate Class',
            coach: 'Coach Sarah',
            schedule: 'Tue/Thu',
            time: '5:00 PM - 6:30 PM',
            level: 'Intermediate',
            status: 'completed',
            enrolled: 14,
            maxCapacity: 18,
            progress: 100,
        },
        {
            id: 4,
            name: 'Private Coaching',
            coach: 'Coach Mike',
            schedule: 'Flexible',
            time: 'By Appointment',
            level: 'All Levels',
            status: 'upcoming',
            enrolled: 1,
            maxCapacity: 1,
            progress: 0,
        },
    ]);

    const getStatusBadge = (status) => {
        const statusMap = {
            active: 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300',
            completed: 'bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-300',
            upcoming: 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-300',
            cancelled: 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300',
        };
        return statusMap[status] || statusMap.upcoming;
    };

    const getStatusText = (status) => {
        return status.charAt(0).toUpperCase() + status.slice(1);
    };

    const getLevelBadge = (level) => {
        const levelMap = {
            Beginner: 'bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-300',
            Intermediate: 'bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-300',
            Advanced: 'bg-purple-100 text-purple-700 dark:bg-purple-900 dark:text-purple-300',
            'All Levels': 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300',
        };
        return levelMap[level] || levelMap.Beginner;
    };

    return (
        <AuthenticatedLayout
            header={<h2 className="text-xl font-semibold text-gray-800 dark:text-white">My Classes</h2>}
        >
            <Head title="My Classes" />

            <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                {/* ── Header Section ── */}
                <div className="mb-8 rounded-2xl bg-white shadow-sm p-6 border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <div className="flex flex-wrap items-center justify-between gap-4">
                        <div>
                            <h1 className="text-2xl font-bold text-gray-800 dark:text-white">
                                Your Classes
                            </h1>
                            <p className="text-sm text-gray-600 dark:text-gray-300">
                                You are enrolled in {classes.filter(c => c.status === 'active').length} active classes.
                            </p>
                        </div>
                        <a
                            href={route('classes')}
                            className="rounded-full bg-blue-600 px-6 py-2 text-sm font-semibold text-white transition hover:bg-blue-700"
                        >
                            + Enroll in New Class
                        </a>
                    </div>
                </div>

                {/* ── Stats Summary ── */}
                <div className="mb-8 grid grid-cols-2 gap-4 sm:grid-cols-4">
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">
                            {classes.filter(c => c.status === 'active').length}
                        </p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Active</p>
                    </div>
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">
                            {classes.filter(c => c.status === 'upcoming').length}
                        </p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Upcoming</p>
                    </div>
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">
                            {classes.filter(c => c.status === 'completed').length}
                        </p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Completed</p>
                    </div>
                    <div className="rounded-2xl bg-white shadow-sm p-6 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <p className="text-3xl font-bold text-gray-800 dark:text-white">
                            {classes.length}
                        </p>
                        <p className="text-sm text-gray-600 dark:text-gray-300">Total</p>
                    </div>
                </div>

                {/* ── Classes Grid ── */}
                <div className="grid grid-cols-1 gap-6 md:grid-cols-2">
                    {classes.length > 0 ? (
                        classes.map((cls) => (
                            <div
                                key={cls.id}
                                className="rounded-2xl bg-white shadow-sm border border-gray-200 p-6 hover:shadow-md transition dark:bg-gray-800 dark:border-gray-700"
                            >
                                <div className="flex items-start justify-between">
                                    <div>
                                        <h3 className="text-lg font-semibold text-gray-800 dark:text-white">
                                            {cls.name}
                                        </h3>
                                        <p className="text-sm text-gray-600 dark:text-gray-300">
                                            {cls.coach}
                                        </p>
                                    </div>
                                    <span className={`rounded-full px-3 py-1 text-xs font-medium ${getStatusBadge(cls.status)}`}>
                                        {getStatusText(cls.status)}
                                    </span>
                                </div>

                                <div className="mt-4 space-y-2">
                                    <div className="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-300">
                                        <i className="fa-solid fa-calendar-day w-5 text-blue-500"></i>
                                        {cls.schedule}
                                    </div>
                                    <div className="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-300">
                                        <i className="fa-solid fa-clock w-5 text-blue-500"></i>
                                        {cls.time}
                                    </div>
                                    <div className="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-300">
                                        <i className="fa-solid fa-users w-5 text-blue-500"></i>
                                        {cls.enrolled} / {cls.maxCapacity} enrolled
                                    </div>
                                    <div className="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-300">
                                        <i className="fa-solid fa-signal w-5 text-blue-500"></i>
                                        <span className={`rounded-full px-2 py-0.5 text-xs font-medium ${getLevelBadge(cls.level)}`}>
                                            {cls.level}
                                        </span>
                                    </div>
                                </div>

                                {cls.status === 'active' && (
                                    <div className="mt-4">
                                        <div className="flex items-center justify-between text-sm">
                                            <span className="text-gray-600 dark:text-gray-300">Progress</span>
                                            <span className="font-medium text-gray-800 dark:text-white">{cls.progress}%</span>
                                        </div>
                                        <div className="mt-1 h-2 w-full rounded-full bg-gray-200 dark:bg-gray-700">
                                            <div
                                                className="h-2 rounded-full bg-blue-600 transition-all duration-500"
                                                style={{ width: `${cls.progress}%` }}
                                            ></div>
                                        </div>
                                    </div>
                                )}

                                <div className="mt-4 flex gap-3">
                                    <Link
                                        href={`/classes/${cls.id}`}
                                        className="rounded-full bg-blue-600 px-4 py-1.5 text-sm font-semibold text-white transition hover:bg-blue-700"
                                    >
                                        View Details
                                    </Link>
                                    {cls.status === 'active' && (
                                        <Link
                                            href="#"
                                            className="rounded-full border border-gray-300 px-4 py-1.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700"
                                        >
                                            Resume
                                        </Link>
                                    )}
                                </div>
                            </div>
                        ))
                    ) : (
                        <div className="col-span-2 rounded-2xl bg-white shadow-sm p-12 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                            <i className="fa-solid fa-chalkboard-user text-5xl text-gray-400 mb-4 block"></i>
                            <h3 className="text-lg font-semibold text-gray-800 dark:text-white">No Classes Enrolled</h3>
                            <p className="text-sm text-gray-600 dark:text-gray-300 mt-1">
                                You haven't enrolled in any classes yet. Start your learning journey today!
                            </p>
                            <Link
                                href="/classes"
                                className="inline-block mt-4 rounded-full bg-blue-600 px-6 py-2 text-sm font-semibold text-white transition hover:bg-blue-700"
                            >
                                Browse Classes
                            </Link>
                        </div>
                    )}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}