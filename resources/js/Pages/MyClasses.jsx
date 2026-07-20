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
            coachImage: '/images/beginner_class.jpg',
            schedule: 'Mon/Wed/Fri',
            time: '6:00 PM - 7:30 PM',
            level: 'Beginner',
            status: 'active',
            enrolled: 12,
            maxCapacity: 20,
            progress: 65,
            description: 'Learn the fundamentals of badminton in a fun and supportive environment. No experience needed.',
            price: '₱500',
            duration: '6 Weeks',
            sessions: '1hr per session',
            features: ['No experience needed', 'All equipment provided', 'Certified coach', 'Small class size (max 8)'],
            curriculum: [
                'Proper Grip & Stance',
                'Basic Footwork',
                'Serving Techniques',
                'Forehand & Backhand',
                'Rallying Drills',
                'Game Rules & Matches'
            ],
        },
        {
            id: 2,
            name: 'Advanced Class',
            coach: 'Coach Alex',
            coachImage: '/images/advance_class.jpg',
            schedule: 'Weekends',
            time: '6:00 PM - 8:00 PM',
            level: 'Advanced',
            status: 'active',
            enrolled: 8,
            maxCapacity: 15,
            progress: 40,
            description: 'Elite training for competitive players. Master high-level techniques, tactics, and match play.',
            price: '₱800',
            duration: '6 Weeks',
            sessions: '1hr per session',
            features: ['Tournament experience recommended', 'Elite coaching & tactics', 'Competitive match play', 'Small class size (max 4)'],
            curriculum: [
                'Power Smashes & Jump Smashes',
                'Deceptive Net Play',
                'Advanced Footwork & Speed',
                'Opponent Analysis',
                'Match Strategy & Mental Toughness',
                'Tournament Preparation'
            ],
        },
        {
            id: 3,
            name: 'Intermediate Class',
            coach: 'Coach Sarah',
            coachImage: '/images/intermediate_class.jpg',
            schedule: 'Tue/Thu',
            time: '5:00 PM - 6:30 PM',
            level: 'Intermediate',
            status: 'completed',
            enrolled: 14,
            maxCapacity: 18,
            progress: 100,
            description: 'Take your badminton skills to the next level. Build on your fundamentals and learn advanced techniques.',
            price: '₱600',
            duration: '6 Weeks',
            sessions: '1hr per session',
            features: ['Basic skills required', 'Advanced techniques', 'Match play & strategy', 'Small class size (max 6)'],
            curriculum: [
                'Advanced Footwork',
                'Shot Variation',
                'Deceptive Net Play',
                'Defensive & Offensive Tactics',
                'Match Strategy',
                'Competitive Match Play'
            ],
        },
        {
            id: 4,
            name: 'Private Coaching',
            coach: 'Coach Mike',
            coachImage: '/images/beginner_class.jpg',
            schedule: 'Flexible',
            time: 'By Appointment',
            level: 'All Levels',
            status: 'upcoming',
            enrolled: 1,
            maxCapacity: 1,
            progress: 0,
            description: 'One-on-one coaching tailored to your specific needs and goals.',
            price: '₱1,200',
            duration: 'Flexible',
            sessions: '1hr per session',
            features: ['Personalized attention', 'Customized training plan', 'Flexible schedule', 'Rapid improvement'],
            curriculum: [
                'Personalized Assessment',
                'Custom Drills & Techniques',
                'Game Strategy Development',
                'Mental Conditioning',
                'Video Analysis',
                'Match Preparation'
            ],
        },
    ]);

    // State for modals
    const [selectedClass, setSelectedClass] = useState(null);
    const [showDetailsModal, setShowDetailsModal] = useState(false);
    const [showDropModal, setShowDropModal] = useState(false);
    const [showScheduleModal, setShowScheduleModal] = useState(false);
    const [classToDrop, setClassToDrop] = useState(null);
    const [classForSchedule, setClassForSchedule] = useState(null);
    const [showToast, setShowToast] = useState(false);
    const [toastMessage, setToastMessage] = useState('');
    const [toastType, setToastType] = useState('success');
    
    // Filter state
    const [filterStatus, setFilterStatus] = useState('all');

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

    // Get filtered classes based on status
    const getFilteredClasses = () => {
        if (filterStatus === 'all') {
            return classes;
        }
        return classes.filter(c => c.status === filterStatus);
    };

    const filteredClasses = getFilteredClasses();

    // Get counts for each status
    const getStatusCount = (status) => {
        if (status === 'all') return classes.length;
        return classes.filter(c => c.status === status).length;
    };

    const handleViewDetails = (cls) => {
        setSelectedClass(cls);
        setShowDetailsModal(true);
    };

    const closeDetailsModal = () => {
        setShowDetailsModal(false);
        setSelectedClass(null);
    };

    const handleDropClick = (cls) => {
        setClassToDrop(cls);
        setShowDropModal(true);
    };

    const handleDropClass = () => {
        setClasses(classes.filter(c => c.id !== classToDrop.id));
        
        setToastMessage(`You have successfully dropped ${classToDrop.name}.`);
        setToastType('info');
        setShowToast(true);
        
        setShowDropModal(false);
        setClassToDrop(null);
        
        setTimeout(() => {
            setShowToast(false);
        }, 3000);
    };

    const closeDropModal = () => {
        setShowDropModal(false);
        setClassToDrop(null);
    };

    const handleViewSchedule = (cls) => {
        setClassForSchedule(cls);
        setShowScheduleModal(true);
    };

    const closeScheduleModal = () => {
        setShowScheduleModal(false);
        setClassForSchedule(null);
    };

    // Filter button component
    const FilterButton = ({ status, label }) => (
        <button
            onClick={() => setFilterStatus(status)}
            className={`px-4 py-2 rounded-full text-sm font-semibold transition ${
                filterStatus === status
                    ? 'bg-blue-600 text-white shadow-md'
                    : 'bg-gray-100 text-gray-700 hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600'
            }`}
        >
            {label}
            <span className={`ml-2 px-2 py-0.5 rounded-full text-xs ${
                filterStatus === status
                    ? 'bg-white/20 text-white'
                    : 'bg-gray-300 text-gray-700 dark:bg-gray-600 dark:text-gray-300'
            }`}>
                {getStatusCount(status)}
            </span>
        </button>
    );

    return (
        <AuthenticatedLayout
            header={<h2 className="text-xl font-semibold text-gray-800 dark:text-white">My Classes</h2>}
        >
            <Head title="My Classes" />

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
                                Your Classes
                            </h1>
                            <p className="text-sm text-gray-600 dark:text-gray-300">
                                You are enrolled in {classes.filter(c => c.status === 'active').length} active classes.
                            </p>
                        </div>
                        <Link
                            href="/classes"
                            className="rounded-full bg-blue-600 px-6 py-2 text-sm font-semibold text-white transition hover:bg-blue-700"
                        >
                            + Enroll in New Class
                        </Link>
                    </div>
                </div>

                {/* ── Filter Tabs ── */}
                <div className="mb-8 flex flex-wrap gap-2">
                    <FilterButton status="all" label="All" />
                    <FilterButton status="active" label="Active" />
                    <FilterButton status="upcoming" label="Upcoming" />
                    <FilterButton status="completed" label="Completed" />
                </div>


                {/* ── Classes Grid ── */}
                {filteredClasses.length > 0 ? (
                    <div className="grid grid-cols-1 gap-6 md:grid-cols-2">
                        {filteredClasses.map((cls) => (
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

                                <div className="mt-4 flex flex-wrap gap-3">
                                    <button
                                        onClick={() => handleViewDetails(cls)}
                                        className="rounded-full bg-blue-600 px-4 py-1.5 text-sm font-semibold text-white transition hover:bg-blue-700"
                                    >
                                        View Details
                                    </button>
                                    <button
                                        onClick={() => handleViewSchedule(cls)}
                                        className="rounded-full border border-gray-300 px-4 py-1.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700"
                                    >
                                        <i className="fa-solid fa-calendar mr-1"></i>
                                        View Schedule
                                    </button>
                                    {(cls.status === 'active' || cls.status === 'upcoming') && (
                                        <button
                                            onClick={() => handleDropClick(cls)}
                                            className="rounded-full border border-red-300 px-4 py-1.5 text-sm font-semibold text-red-600 transition hover:bg-red-50 dark:border-red-700 dark:text-red-400 dark:hover:bg-red-900/20"
                                        >
                                            <i className="fa-solid fa-xmark mr-1"></i>
                                            Drop Class
                                        </button>
                                    )}
                                    {cls.status === 'completed' && (
                                        <Link
                                            href="#"
                                            className="rounded-full border border-purple-300 px-4 py-1.5 text-sm font-semibold text-purple-600 transition hover:bg-purple-50 dark:border-purple-700 dark:text-purple-400 dark:hover:bg-purple-900/20"
                                        >
                                            <i className="fa-solid fa-certificate mr-1"></i>
                                            Certificate
                                        </Link>
                                    )}
                                </div>
                            </div>
                        ))}
                    </div>
                ) : (
                    <div className="rounded-2xl bg-white shadow-sm p-12 text-center border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <i className="fa-solid fa-filter text-5xl text-gray-400 mb-4 block"></i>
                        <h3 className="text-lg font-semibold text-gray-800 dark:text-white">No {filterStatus !== 'all' ? filterStatus : ''} Classes</h3>
                        <p className="text-sm text-gray-600 dark:text-gray-300 mt-1">
                            {filterStatus === 'all' 
                                ? "You haven't enrolled in any classes yet. Start your learning journey today!"
                                : `You don't have any ${filterStatus} classes at the moment.`
                            }
                        </p>
                        {filterStatus !== 'all' && (
                            <button
                                onClick={() => setFilterStatus('all')}
                                className="inline-block mt-4 rounded-full bg-blue-600 px-6 py-2 text-sm font-semibold text-white transition hover:bg-blue-700"
                            >
                                View All Classes
                            </button>
                        )}
                        {filterStatus === 'all' && (
                            <Link
                                href="/classes"
                                className="inline-block mt-4 rounded-full bg-blue-600 px-6 py-2 text-sm font-semibold text-white transition hover:bg-blue-700"
                            >
                                Browse Classes
                            </Link>
                        )}
                    </div>
                )}
            </div>

            {/* ── View Details Modal ── */}
            {showDetailsModal && selectedClass && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm p-4">
                    <div className="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto border border-gray-200 dark:border-gray-700 animate-scale-in">
                        
                        {/* Modal Header */}
                        <div className="sticky top-0 z-10 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 px-6 py-4 flex items-center justify-between">
                            <h3 className="text-xl font-bold text-gray-800 dark:text-white">Class Details</h3>
                            <button
                                onClick={closeDetailsModal}
                                className="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"
                            >
                                <i className="fa-solid fa-xmark text-2xl"></i>
                            </button>
                        </div>

                        <div className="p-6">
                            {/* Class Header */}
                            <div className="flex flex-wrap items-start justify-between gap-4 mb-6">
                                <div>
                                    <h2 className="text-2xl font-bold text-gray-800 dark:text-white">
                                        {selectedClass.name}
                                    </h2>
                                    <p className="text-gray-600 dark:text-gray-300">
                                        {selectedClass.coach}
                                    </p>
                                </div>
                                <div className="flex flex-wrap gap-2">
                                    <span className={`rounded-full px-3 py-1 text-xs font-medium ${getStatusBadge(selectedClass.status)}`}>
                                        {getStatusText(selectedClass.status)}
                                    </span>
                                    <span className={`rounded-full px-3 py-1 text-xs font-medium ${getLevelBadge(selectedClass.level)}`}>
                                        {selectedClass.level}
                                    </span>
                                </div>
                            </div>

                            {/* Coach Image & Description */}
                            <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                                <div className="md:col-span-1">
                                    <img 
                                        src={selectedClass.coachImage || '/images/placeholder.jpg'} 
                                        alt={selectedClass.coach}
                                        className="w-full h-48 object-cover rounded-xl"
                                    />
                                </div>
                                <div className="md:col-span-2">
                                    <p className="text-gray-600 dark:text-gray-300">
                                        {selectedClass.description}
                                    </p>
                                    <div className="mt-4 grid grid-cols-2 gap-2">
                                        <div className="bg-gray-50 dark:bg-gray-700 rounded-lg p-3 text-center">
                                            <p className="text-sm text-gray-500 dark:text-gray-400">Duration</p>
                                            <p className="font-semibold text-gray-800 dark:text-white">{selectedClass.duration}</p>
                                        </div>
                                        <div className="bg-gray-50 dark:bg-gray-700 rounded-lg p-3 text-center">
                                            <p className="text-sm text-gray-500 dark:text-gray-400">Price</p>
                                            <p className="font-semibold text-gray-800 dark:text-white">{selectedClass.price}</p>
                                        </div>
                                        <div className="bg-gray-50 dark:bg-gray-700 rounded-lg p-3 text-center">
                                            <p className="text-sm text-gray-500 dark:text-gray-400">Schedule</p>
                                            <p className="font-semibold text-gray-800 dark:text-white">{selectedClass.schedule}</p>
                                        </div>
                                        <div className="bg-gray-50 dark:bg-gray-700 rounded-lg p-3 text-center">
                                            <p className="text-sm text-gray-500 dark:text-gray-400">Session</p>
                                            <p className="font-semibold text-gray-800 dark:text-white">{selectedClass.sessions}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {/* Features */}
                            <div className="mb-6">
                                <h4 className="text-sm font-semibold text-gray-800 dark:text-white mb-3">What's Included</h4>
                                <div className="grid grid-cols-2 gap-2">
                                    {selectedClass.features.map((feature, index) => (
                                        <div key={index} className="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-300">
                                            <i className="fa-solid fa-check-circle text-green-500"></i>
                                            <span>{feature}</span>
                                        </div>
                                    ))}
                                </div>
                            </div>

                            {/* Curriculum */}
                            <div className="mb-6">
                                <h4 className="text-sm font-semibold text-gray-800 dark:text-white mb-3">Curriculum</h4>
                                <div className="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    {selectedClass.curriculum.map((item, index) => (
                                        <div key={index} className="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-300 p-2 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <span className="text-blue-500 font-bold text-xs w-6">{String(index + 1).padStart(2, '0')}</span>
                                            <span>{item}</span>
                                        </div>
                                    ))}
                                </div>
                            </div>

                            {/* Progress (if active) */}
                            {selectedClass.status === 'active' && (
                                <div className="mb-6 p-4 bg-blue-50 dark:bg-blue-900/20 rounded-xl">
                                    <div className="flex items-center justify-between text-sm mb-2">
                                        <span className="font-semibold text-gray-800 dark:text-white">Your Progress</span>
                                        <span className="font-semibold text-blue-600 dark:text-blue-400">{selectedClass.progress}%</span>
                                    </div>
                                    <div className="h-2 w-full rounded-full bg-gray-200 dark:bg-gray-700">
                                        <div
                                            className="h-2 rounded-full bg-blue-600 transition-all duration-500"
                                            style={{ width: `${selectedClass.progress}%` }}
                                        ></div>
                                    </div>
                                </div>
                            )}

                            {/* Action Buttons */}
                            <div className="flex flex-wrap gap-3 pt-4 border-t border-gray-200 dark:border-gray-700">
                                <button
                                    onClick={closeDetailsModal}
                                    className="rounded-full bg-gray-200 px-6 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600"
                                >
                                    Close
                                </button>
                                <button
                                    onClick={() => {
                                        closeDetailsModal();
                                        handleViewSchedule(selectedClass);
                                    }}
                                    className="rounded-full border border-gray-300 px-6 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700"
                                >
                                    <i className="fa-solid fa-calendar mr-2"></i>
                                    View Schedule
                                </button>
                                {(selectedClass.status === 'active' || selectedClass.status === 'upcoming') && (
                                    <button
                                        onClick={() => {
                                            closeDetailsModal();
                                            handleDropClick(selectedClass);
                                        }}
                                        className="rounded-full border border-red-300 px-6 py-2 text-sm font-semibold text-red-600 transition hover:bg-red-50 dark:border-red-700 dark:text-red-400 dark:hover:bg-red-900/20"
                                    >
                                        <i className="fa-solid fa-xmark mr-2"></i>
                                        Drop Class
                                    </button>
                                )}
                                {selectedClass.status === 'completed' && (
                                    <Link
                                        href="#"
                                        className="rounded-full bg-purple-600 px-6 py-2 text-sm font-semibold text-white transition hover:bg-purple-700"
                                    >
                                        <i className="fa-solid fa-certificate mr-2"></i>
                                        View Certificate
                                    </Link>
                                )}
                            </div>
                        </div>
                    </div>
                </div>
            )}

            {/* ── View Schedule Modal ── */}
            {showScheduleModal && classForSchedule && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm p-4">
                    <div className="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl w-full max-w-md p-6 border border-gray-200 dark:border-gray-700 animate-scale-in">
                        <div className="flex items-center justify-between mb-4">
                            <h3 className="text-xl font-bold text-gray-800 dark:text-white">Class Schedule</h3>
                            <button
                                onClick={closeScheduleModal}
                                className="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"
                            >
                                <i className="fa-solid fa-xmark text-xl"></i>
                            </button>
                        </div>

                        <div className="space-y-4">
                            <div className="p-4 bg-blue-50 dark:bg-blue-900/20 rounded-xl">
                                <div className="flex items-center gap-3 text-gray-800 dark:text-white">
                                    <i className="fa-solid fa-calendar-day text-blue-500 text-xl"></i>
                                    <div>
                                        <p className="font-semibold">{classForSchedule.name}</p>
                                        <p className="text-sm text-gray-600 dark:text-gray-300">{classForSchedule.coach}</p>
                                    </div>
                                </div>
                            </div>

                            <div className="space-y-3">
                                <div className="flex justify-between py-2 border-b border-gray-100 dark:border-gray-700">
                                    <span className="text-gray-600 dark:text-gray-400">Schedule</span>
                                    <span className="font-medium text-gray-800 dark:text-white">{classForSchedule.schedule}</span>
                                </div>
                                <div className="flex justify-between py-2 border-b border-gray-100 dark:border-gray-700">
                                    <span className="text-gray-600 dark:text-gray-400">Time</span>
                                    <span className="font-medium text-gray-800 dark:text-white">{classForSchedule.time}</span>
                                </div>
                                <div className="flex justify-between py-2 border-b border-gray-100 dark:border-gray-700">
                                    <span className="text-gray-600 dark:text-gray-400">Duration</span>
                                    <span className="font-medium text-gray-800 dark:text-white">{classForSchedule.duration}</span>
                                </div>
                                <div className="flex justify-between py-2 border-b border-gray-100 dark:border-gray-700">
                                    <span className="text-gray-600 dark:text-gray-400">Session</span>
                                    <span className="font-medium text-gray-800 dark:text-white">{classForSchedule.sessions}</span>
                                </div>
                                <div className="flex justify-between py-2">
                                    <span className="text-gray-600 dark:text-gray-400">Status</span>
                                    <span className={`rounded-full px-3 py-1 text-xs font-medium ${getStatusBadge(classForSchedule.status)}`}>
                                        {getStatusText(classForSchedule.status)}
                                    </span>
                                </div>
                            </div>

                            {classForSchedule.status === 'active' && (
                                <div className="p-3 bg-green-50 dark:bg-green-900/20 rounded-lg">
                                    <p className="text-sm text-green-700 dark:text-green-300">
                                        <i className="fa-solid fa-check-circle mr-2"></i>
                                        Your next session is on {classForSchedule.schedule} at {classForSchedule.time}
                                    </p>
                                </div>
                            )}

                            {classForSchedule.status === 'upcoming' && (
                                <div className="p-3 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg">
                                    <p className="text-sm text-yellow-700 dark:text-yellow-300">
                                        <i className="fa-solid fa-clock mr-2"></i>
                                        This class starts soon. Check your email for confirmation.
                                    </p>
                                </div>
                            )}

                            {classForSchedule.status === 'completed' && (
                                <div className="p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                                    <p className="text-sm text-blue-700 dark:text-blue-300">
                                        <i className="fa-solid fa-check-double mr-2"></i>
                                        This class has been completed. View your certificate!
                                    </p>
                                </div>
                            )}
                        </div>

                        <div className="mt-6">
                            <button
                                onClick={closeScheduleModal}
                                className="w-full rounded-full bg-gray-200 px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600"
                            >
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            )}

            {/* ── Drop Class Confirmation Modal ── */}
            {showDropModal && classToDrop && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm p-4">
                    <div className="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl w-full max-w-md p-6 border border-gray-200 dark:border-gray-700 animate-scale-in">
                        <div className="text-center">
                            <div className="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-red-100 dark:bg-red-900/30 mb-4">
                                <i className="fa-solid fa-circle-xmark text-2xl text-red-600 dark:text-red-400"></i>
                            </div>
                            <h3 className="text-xl font-bold text-gray-800 dark:text-white">Drop Class</h3>
                            <p className="mt-2 text-sm text-gray-600 dark:text-gray-300">
                                Are you sure you want to drop <span className="font-semibold">{classToDrop.name}</span>?
                            </p>
                            <p className="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                This action cannot be undone. You will lose access to all class materials.
                            </p>
                        </div>

                        <div className="mt-6 flex gap-3">
                            <button
                                onClick={closeDropModal}
                                className="flex-1 rounded-full bg-gray-200 px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600"
                            >
                                Keep Class
                            </button>
                            <button
                                onClick={handleDropClass}
                                className="flex-1 rounded-full bg-red-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-red-700"
                            >
                                <i className="fa-solid fa-xmark mr-2"></i>
                                Drop Class
                            </button>
                        </div>
                    </div>
                </div>
            )}

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
                .animate-slide-in {
                    animation: slideIn 0.3s ease-out;
                }
                .animate-scale-in {
                    animation: scaleIn 0.2s ease-out;
                }
            `}</style>
        </AuthenticatedLayout>
    );
}