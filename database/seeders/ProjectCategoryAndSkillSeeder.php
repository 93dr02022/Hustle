<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use App\Models\ProjectSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectCategoryAndSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect([
            // group 1
            [
                "category" => "Programming Languages",
                "slug" => "programming-languages",
                "list" => [
                    "Java",
                    "Python",
                    "C++",
                    "JavaScript",
                    "Ruby",
                    "PHP"
                ]
            ],
            [
                "category" => "Web Development",
                "slug" => "web-development",
                "list" => [
                    "HTML5",
                    "CSS3",
                    "React.js",
                    "Angular",
                    "Node.js",
                    "RESTful APIs"
                ]
            ],
            [
                "category" => "Database Management",
                "slug" => "database-management",
                "list" => [
                    "SQL",
                    "MySQL",
                    "MongoDB",
                    "Oracle",
                    "PostgreSQL",
                    "NoSQL"
                ]
            ],
            [
                "category" => "Cloud Technologies",
                "slug" => "cloud-technologies",
                "list" => [
                    "Amazon Web Services (AWS)",
                    "Microsoft Azure",
                    "Google Cloud Platform (GCP)",
                    "DevOps",
                    "Docker",
                    "Kubernetes"
                ]
            ],
            [
                "category" => "Big Data",
                "slug" => "big-data",
                "list" => [
                    "Hadoop",
                    "Spark",
                    "Apache Kafka",
                    "Apache Hive",
                    "Data Warehousing",
                    "Data Mining"
                ]
            ],
            [
                "category" => "Cybersecurity",
                "slug" => "cybersecurity",
                "list" => [
                    "Network Security",
                    "Ethical Hacking",
                    "Intrusion Detection",
                    "Vulnerability Assessment",
                    "Security Auditing",
                    "Identity and Access Management"
                ]
            ],
            [
                "category" => "Artificial Intelligence",
                "slug" => "artificial-intelligence",
                "list" => [
                    "Machine Learning",
                    "Deep Learning",
                    "Natural Language Processing (NLP)",
                    "Computer Vision",
                    "Reinforcement Learning",
                    "Neural Networks"
                ]
            ],

            // group 2
            [
                "category" => "Carpentry",
                "slug" => "carpentry",
                "list" => [
                    "Framing",
                    "Trimming",
                    "Cabinet Installation",
                    "Woodworking",
                    "Door and Window Installation",
                    "Deck Building"
                ]
            ],
            [
                "category" => "Electrical Work",
                "slug" => "electrical-work",
                "list" => [
                    "Wiring",
                    "Outlet Installation",
                    "Lighting Installation",
                    "Ceiling Fan Installation",
                    "Electrical Panel Upgrades",
                    "Troubleshooting"
                ]
            ],
            [
                "category" => "Plumbing",
                "slug" => "plumbing",
                "list" => [
                    "Pipe Installation",
                    "Faucet and Fixture Replacement",
                    "Toilet Installation",
                    "Water Heater Installation",
                    "Drain Cleaning",
                    "Leak Repair"
                ]
            ],
            [
                "category" => "Painting",
                "slug" => "painting",
                "list" => [
                    "Interior Painting",
                    "Exterior Painting",
                    "Surface Preparation",
                    "Color Mixing and Matching",
                    "Trim Painting",
                    "Spray Painting"
                ]
            ],
            [
                "category" => "Flooring",
                "slug" => "flooring",
                "list" => [
                    "Tile Installation",
                    "Hardwood Flooring",
                    "Laminate Flooring",
                    "Vinyl Flooring",
                    "Carpet Installation",
                    "Flooring Repairs"
                ]
            ],
            [
                "category" => "Landscaping",
                "slug" => "landscaping",
                "list" => [
                    "Lawn Maintenance",
                    "Planting and Garden Design",
                    "Hardscaping",
                    "Irrigation System Installation",
                    "Tree Trimming and Pruning",
                    "Mulching"
                ]
            ],
            [
                "category" => "Home Security",
                "slug" => "home-security",
                "list" => [
                    "Security Camera Installation",
                    "Alarm System Setup",
                    "Smart Lock Installation",
                    "Motion Sensor Installation",
                    "Door and Window Security",
                    "Home Automation Integration"
                ]
            ],

            // group 3
            [
                "category" => "Yoga and Meditation",
                "slug" => "yoga-and-meditation",
                "list" => [
                    "Yoga Instruction",
                    "Meditation Techniques",
                    "Breathing Exercises",
                    "Mindfulness Practices",
                    "Yoga Therapy",
                    "Yoga Teacher Training"
                ]
            ],
            [
                "category" => "Nutrition and Diet",
                "slug" => "nutrition-and-diet",
                "list" => [
                    "Nutritional Counseling",
                    "Meal Planning",
                    "Weight Management",
                    "Dietary Analysis",
                    "Specialized Diets (e.g., Vegan, Paleo)",
                    "Nutrition Education"
                ]
            ],
            [
                "category" => "Fitness Training",
                "slug" => "fitness-training",
                "list" => [
                    "Personal Training",
                    "Strength and Conditioning",
                    "Cardiovascular Fitness",
                    "Functional Training",
                    "Group Fitness Instruction",
                    "Fitness Program Design"
                ]
            ],
            [
                "category" => "Mind-Body Practices",
                "slug" => "mind-body-practices",
                "list" => [
                    "Pilates",
                    "Tai Chi",
                    "Qi Gong",
                    "Stretching and Flexibility",
                    "Body Awareness",
                    "Body-Mind Connection"
                ]
            ],
            [
                "category" => "Holistic Health",
                "slug" => "holistic-health",
                "list" => [
                    "Herbal Medicine",
                    "Aromatherapy",
                    "Ayurveda",
                    "Energy Healing",
                    "Holistic Wellness Assessment",
                    "Natural Remedies"
                ]
            ],
            [
                "category" => "Stress Management",
                "slug" => "stress-management",
                "list" => [
                    "Stress Reduction Techniques",
                    "Relaxation Training",
                    "Mental Health Support",
                    "Coping Strategies",
                    "Work-Life Balance",
                    "Mindfulness-Based Stress Reduction"
                ]
            ],
            [
                "category" => "Wellness Coaching",
                "slug" => "wellness-coaching",
                "list" => [
                    "Health and Wellness Goal Setting",
                    "Motivational Interviewing",
                    "Behavior Change Techniques",
                    "Positive Psychology",
                    "Lifestyle Coaching",
                    "Wellness Workshops"
                ]
            ],

            // group 4
            [
                "category" => "Animal Handling",
                "slug" => "animal-handling",
                "list" => [
                    "Dog Handling",
                    "Cat Handling",
                    "Small Animal Handling",
                    "Bird Handling",
                    "Reptile Handling",
                    "Exotic Animal Handling"
                ]
            ],
            [
                "category" => "Pet Nutrition",
                "slug" => "pet-nutrition",
                "list" => [
                    "Pet Food Knowledge",
                    "Feeding Techniques",
                    "Specialized Diets (e.g., Raw, Prescription)",
                    "Supplement Recommendations",
                    "Weight Management",
                    "Nutritional Counseling"
                ]
            ],
            [
                "category" => "Pet Training",
                "slug" => "pet-training",
                "list" => [
                    "Basic Obedience Training",
                    "Housebreaking",
                    "Leash Training",
                    "Clicker Training",
                    "Behavior Modification",
                    "Trick Training"
                ]
            ],
            [
                "category" => "Pet Grooming",
                "slug" => "pet-grooming",
                "list" => [
                    "Bathing",
                    "Brushing and De-shedding",
                    "Haircut and Styling",
                    "Nail Trimming",
                    "Ear Cleaning",
                    "Teeth Brushing"
                ]
            ],
            [
                "category" => "Pet Health and First Aid",
                "slug" => "pet-health-and-first-aid",
                "list" => [
                    "Pet First Aid",
                    "Recognizing Signs of Illness",
                    "Administering Medications",
                    "Basic Wound Care",
                    "Parasite Prevention",
                    "Vaccination Schedules"
                ]
            ],
            [
                "category" => "Pet Sitting and Boarding",
                "slug" => "pet-sitting-and-boarding",
                "list" => [
                    "Pet Sitting",
                    "Dog Walking",
                    "Overnight Boarding",
                    "Playtime and Exercise",
                    "Administering Feeding and Medications",
                    "Observing Behavior and Health"
                ]
            ],
            [
                "category" => "Pet Behavior",
                "slug" => "pet-behavior",
                "list" => [
                    "Understanding Animal Behavior",
                    "Stress and Anxiety Management",
                    "Socialization Techniques",
                    "Aggression Management",
                    "Fear and Phobia Management",
                    "Enrichment Activities"
                ]
            ],

            // group 5
            [
                "category" => "Sales and Marketing",
                "slug" => "sales-and-marketing",
                "list" => [
                    "Sales Strategy Development",
                    "Lead Generation",
                    "Client Relationship Management",
                    "Market Research",
                    "Digital Marketing",
                    "Campaign Management"
                ]
            ],
            [
                "category" => "Strategic Planning",
                "slug" => "strategic-planning",
                "list" => [
                    "Business Analysis",
                    "Market Entry Strategy",
                    "Competitive Analysis",
                    "SWOT Analysis",
                    "Financial Modeling",
                    "Strategic Partnerships"
                ]
            ],
            [
                "category" => "Business Analytics",
                "slug" => "business-analytics",
                "list" => [
                    "Data Analysis",
                    "Business Intelligence",
                    "Performance Metrics",
                    "Data Visualization",
                    "Predictive Analytics",
                    "Reporting and Dashboards"
                ]
            ],
            [
                "category" => "Project Management",
                "slug" => "project-management",
                "list" => [
                    "Project Planning",
                    "Resource Allocation",
                    "Risk Management",
                    "Budgeting and Cost Control",
                    "Stakeholder Management",
                    "Agile Methodologies"
                ]
            ],
            [
                "category" => "Financial Management",
                "slug" => "financial-management",
                "list" => [
                    "Financial Planning",
                    "Budgeting",
                    "Financial Analysis",
                    "Cash Flow Management",
                    "Profit and Loss Analysis",
                    "Investment Evaluation"
                ]
            ],
            [
                "category" => "Operations Management",
                "slug" => "operations-management",
                "list" => [
                    "Process Optimization",
                    "Supply Chain Management",
                    "Quality Management",
                    "Inventory Control",
                    "Logistics Planning",
                    "Lean Six Sigma"
                ]
            ],
            [
                "category" => "Leadership and Communication",
                "slug" => "leadership-and-communication",
                "list" => [
                    "Team Leadership",
                    "Effective Communication",
                    "Conflict Resolution",
                    "Presentation Skills",
                    "Negotiation Skills",
                    "Influencing and Persuasion"
                ]
            ],

            // group 6
            [
                "category" => "Event Planning",
                "slug" => "event-planning",
                "list" => [
                    "Venue Selection",
                    "Budget Management",
                    "Event Timeline Development",
                    "Vendor Management",
                    "Logistics Coordination",
                    "Event Permitting"
                ]
            ],
            [
                "category" => "Event Marketing",
                "slug" => "event-marketing",
                "list" => [
                    "Promotional Strategy",
                    "Social Media Marketing",
                    "Email Marketing",
                    "Content Creation",
                    "Public Relations",
                    "Ticketing and Registration"
                ]
            ],
            [
                "category" => "Event Production",
                "slug" => "event-production",
                "list" => [
                    "Stage Design and Setup",
                    "Audio-Visual Equipment Management",
                    "Lighting Design",
                    "Special Effects",
                    "Live Streaming",
                    "On-site Coordination"
                ]
            ],
            [
                "category" => "Event Catering",
                "slug" => "event-catering",
                "list" => [
                    "Menu Planning",
                    "Food and Beverage Management",
                    "Caterer Selection",
                    "Dietary Restrictions Accommodation",
                    "Food Safety and Hygiene",
                    "Table Setup and Decor"
                ]
            ],
            [
                "category" => "Event Entertainment",
                "slug" => "event-entertainment",
                "list" => [
                    "Artist and Performer Booking",
                    "Live Bands and DJs",
                    "MC and Host Selection",
                    "Interactive Activities",
                    "Themed Entertainment",
                    "Audio-Visual Presentations"
                ]
            ],
            [
                "category" => "Event Coordination",
                "slug" => "event-coordination",
                "list" => [
                    "Attendee Communication",
                    "RSVP Management",
                    "On-site Staff Coordination",
                    "Guest Experience Management",
                    "Event Schedule Execution",
                    "Issue Resolution"
                ]
            ],
            [
                "category" => "Event Decoration",
                "slug" => "event-decoration",
                "list" => [
                    "Theme Development",
                    "Floral Arrangements",
                    "Table Centerpieces",
                    "Backdrop and Stage Decoration",
                    "Props and Set Design",
                    "Ambiance and Lighting"
                ]
            ],

            // group 7

            [
                "category" => "Subject Expertise",
                "slug" => "subject-expertise",
                "list" => [
                    "Mathematics",
                    "Science",
                    "English",
                    "History",
                    "Foreign Languages",
                    "Music"
                ]
            ],
            [
                "category" => "Curriculum Development",
                "slug" => "curriculum-development",
                "list" => [
                    "Lesson Planning",
                    "Learning Objectives",
                    "Educational Resources",
                    "Assessment Methods",
                    "Differentiated Instruction",
                    "Adaptive Learning"
                ]
            ],
            [
                "category" => "Teaching Methods",
                "slug" => "teaching-methods",
                "list" => [
                    "Lecture-Based Teaching",
                    "Interactive Teaching",
                    "Hands-on Demonstrations",
                    "Group Discussions",
                    "Problem-Solving Activities",
                    "Technology Integration"
                ]
            ],
            [
                "category" => "Student Assessment",
                "slug" => "student-assessment",
                "list" => [
                    "Formative Assessment",
                    "Summative Assessment",
                    "Rubric Development",
                    "Test Design",
                    "Grading and Feedback",
                    "Data Analysis"
                ]
            ],
            [
                "category" => "Classroom Management",
                "slug" => "classroom-management",
                "list" => [
                    "Establishing Classroom Rules",
                    "Behavior Management",
                    "Student Engagement Strategies",
                    "Time Management",
                    "Differentiation",
                    "Conflict Resolution"
                ]
            ],
            [
                "category" => "Communication Skills",
                "slug" => "communication-skills",
                "list" => [
                    "Effective Verbal Communication",
                    "Active Listening",
                    "Clear Instructions",
                    "Questioning Techniques",
                    "Building Rapport",
                    "Parent-Teacher Communication"
                ]
            ],
            [
                "category" => "Technology Integration",
                "slug" => "technology-integration",
                "list" => [
                    "Educational Software",
                    "Online Learning Platforms",
                    "Virtual Classrooms",
                    "Interactive Whiteboards",
                    "Multimedia Presentations",
                    "Digital Assessment Tools"
                ]
            ],


            //group 8

            [
                "category" => "Drawing and Painting",
                "slug" => "drawing-and-painting",
                "list" => [
                    "Sketching",
                    "Watercolor Painting",
                    "Acrylic Painting",
                    "Oil Painting",
                    "Mixed Media Art",
                    "Color Theory"
                ]
            ],
            [
                "category" => "Sewing and Textiles",
                "slug" => "sewing-and-textiles",
                "list" => [
                    "Hand Sewing",
                    "Machine Sewing",
                    "Pattern Making",
                    "Embroidery",
                    "Quilting",
                    "Fabric Dyeing"
                ]
            ],
            [
                "category" => "Paper Crafts",
                "slug" => "paper-crafts",
                "list" => [
                    "Origami",
                    "Card Making",
                    "Scrapbooking",
                    "Paper Quilling",
                    "Paper Cutting",
                    "Bookbinding"
                ]
            ],
            [
                "category" => "Jewelry Making",
                "slug" => "jewelry-making",
                "list" => [
                    "Beadwork",
                    "Wire Wrapping",
                    "Metal Stamping",
                    "Polymer Clay Jewelry",
                    "Resin Jewelry",
                    "Jewelry Design"
                ]
            ],
            [
                "category" => "Woodworking",
                "slug" => "woodworking",
                "list" => [
                    "Carving",
                    "Woodturning",
                    "Joinery Techniques",
                    "Finishing and Staining",
                    "Woodworking Tools",
                    "Furniture Making"
                ]
            ],
            [
                "category" => "Pottery and Ceramics",
                "slug" => "pottery-and-ceramics",
                "list" => [
                    "Handbuilding",
                    "Wheel Throwing",
                    "Glazing Techniques",
                    "Clay Sculpting",
                    "Ceramic Decoration",
                    "Kiln Firing"
                ]
            ],
            [
                "category" => "Crafts for Kids",
                "slug" => "crafts-for-kids",
                "list" => [
                    "Paper Crafts for Kids",
                    "Clay Modeling",
                    "Collage Making",
                    "Recycled Crafts",
                    "Puppet Making",
                    "Art Projects for Kids"
                ]
            ],



            // group 9

            [
                "category" => "Graphic Design",
                "slug" => "graphic-design",
                "list" => [
                    "Logo Design",
                    "Brand Identity Design",
                    "Print Design",
                    "Typography",
                    "Visual Communication",
                    "Digital Illustration"
                ]
            ],
            [
                "category" => "Web Design",
                "slug" => "web-design",
                "list" => [
                    "UI Design",
                    "UX Design",
                    "Responsive Design",
                    "Wireframing",
                    "Prototyping",
                    "Front-end Development"
                ]
            ],
            [
                "category" => "HTML/CSS",
                "slug" => "html-css",
                "list" => [
                    "HTML5",
                    "CSS3",
                    "Semantic Markup",
                    "CSS Grid",
                    "CSS Flexbox",
                    "Cross-Browser Compatibility"
                ]
            ],
            [
                "category" => "JavaScript",
                "slug" => "javascript",
                "list" => [
                    "ES6+",
                    "DOM Manipulation",
                    "AJAX",
                    "jQuery",
                    "React",
                    "Vue.js"
                ]
            ],
            [
                "category" => "User Experience (UX)",
                "slug" => "user-experience-ux",
                "list" => [
                    "User Research",
                    "Information Architecture",
                    "Usability Testing",
                    "Persona Creation",
                    "User Flow Mapping",
                    "Interaction Design"
                ]
            ],
            [
                "category" => "User Interface (UI)",
                "slug" => "user-interface-ui",
                "list" => [
                    "UI Style Guides",
                    "Visual Design",
                    "Color Theory",
                    "Icon Design",
                    "Design Systems",
                    "Animation and Motion"
                ]
            ],
            [
                "category" => "Responsive Web Design",
                "slug" => "responsive-web-design",
                "list" => [
                    "Mobile-First Design",
                    "Media Queries",
                    "Responsive Images",
                    "Viewport Meta Tag",
                    "Responsive Frameworks",
                    "Adaptive Layouts"
                ]
            ],



            // group 10

            [
                "category" => "Legal Research",
                "slug" => "legal-research",
                "list" => [
                    "Case Law Analysis",
                    "Statutory Research",
                    "Legal Database Usage",
                    "Legislative History Research",
                    "Legal Writing",
                    "Legal Citation"
                ]
            ],
            [
                "category" => "Contract Law",
                "slug" => "contract-law",
                "list" => [
                    "Contract Drafting",
                    "Contract Review and Negotiation",
                    "Contract Interpretation",
                    "Terms and Conditions",
                    "Breach of Contract",
                    "Contract Dispute Resolution"
                ]
            ],
            [
                "category" => "Intellectual Property",
                "slug" => "intellectual-property",
                "list" => [
                    "Trademark Registration",
                    "Copyright Protection",
                    "Patent Application",
                    "IP Infringement",
                    "Licensing Agreements",
                    "Trade Secrets"
                ]
            ],
            [
                "category" => "Corporate Law",
                "slug" => "corporate-law",
                "list" => [
                    "Business Formation",
                    "Corporate Governance",
                    "Mergers and Acquisitions",
                    "Shareholder Agreements",
                    "Commercial Contracts",
                    "Corporate Compliance"
                ]
            ],
            [
                "category" => "Litigation",
                "slug" => "litigation",
                "list" => [
                    "Legal Dispute Resolution",
                    "Pleadings and Motions",
                    "Discovery Process",
                    "Depositions",
                    "Trial Preparation",
                    "Alternative Dispute Resolution"
                ]
            ],
            [
                "category" => "Employment Law",
                "slug" => "employment-law",
                "list" => [
                    "Employee Contracts",
                    "Discrimination and Harassment",
                    "Wage and Hour Laws",
                    "Employee Benefits",
                    "Labor Disputes",
                    "Workplace Policies"
                ]
            ],
            [
                "category" => "Legal Compliance",
                "slug" => "legal-compliance",
                "list" => [
                    "Regulatory Compliance",
                    "Privacy and Data Protection",
                    "Anti-Money Laundering (AML)",
                    "Know Your Customer (KYC)",
                    "Risk Assessment",
                    "Internal Audit"
                ]
            ],

            // group 11

            [
                "category" => "Goal Setting Development coach",
                "slug" => "goal-setting",
                "list" => [
                    "SMART Goal Setting",
                    "Action Planning",
                    "Prioritization",
                    "Tracking Progress",
                    "Time Management",
                    "Motivation Techniques"
                ]
            ],
            [
                "category" => "Self-Reflection Development coach",
                "slug" => "self-reflection",
                "list" => [
                    "Self-awareness",
                    "Self-assessment",
                    "Journaling",
                    "Meditation",
                    "Mindfulness",
                    "Emotional Intelligence"
                ]
            ],
            [
                "category" => "Communication Skills Development coach",
                "slug" => "communication-skills-development-coach",
                "list" => [
                    "Effective Verbal Communication",
                    "Active Listening",
                    "Nonverbal Communication",
                    "Assertiveness",
                    "Conflict Resolution",
                    "Building Relationships"
                ]
            ],
            [
                "category" => "Time Management Development coach",
                "slug" => "time-management",
                "list" => [
                    "Prioritization",
                    "Planning",
                    "Organization",
                    "Procrastination Management",
                    "Productivity Techniques",
                    "Work-Life Balance"
                ]
            ],
            [
                "category" => "Stress Management Development coach",
                "slug" => "stress-management",
                "list" => [
                    "Identifying Stressors",
                    "Stress Reduction Techniques",
                    "Relaxation Techniques",
                    "Coping Strategies",
                    "Mindfulness",
                    "Self-Care"
                ]
            ],
            [
                "category" => "Confidence Building Development coach",
                "slug" => "confidence-building",
                "list" => [
                    "Positive Self-talk",
                    "Self-acceptance",
                    "Overcoming Self-doubt",
                    "Assertiveness",
                    "Public Speaking",
                    "Body Language"
                ]
            ],
            [
                "category" => "Decision Making Development coach",
                "slug" => "decision-making",
                "list" => [
                    "Problem Solving",
                    "Critical Thinking",
                    "Analytical Skills",
                    "Decision Analysis",
                    "Risk Assessment",
                    "Intuition Development"
                ]
            ],


            // group 12

            [
                "category" => "Photography Camera Operation",
                "slug" => "camera-operation",
                "list" => [
                    "Manual Mode",
                    "Exposure Triangle",
                    "Focus Techniques",
                    "Composition",
                    "White Balance",
                    "Depth of Field"
                ]
            ],
            [
                "category" => "Photography Lighting",
                "slug" => "lighting",
                "list" => [
                    "Natural Light",
                    "Artificial Light",
                    "On-camera Flash",
                    "Off-camera Flash",
                    "Studio Lighting",
                    "Light Modifiers"
                ]
            ],
            [
                "category" => "Photo Post-processing",
                "slug" => "post-processing",
                "list" => [
                    "Adobe Photoshop",
                    "Adobe Lightroom",
                    "Raw Processing",
                    "Color Correction",
                    "Retouching",
                    "Photo Editing Techniques"
                ]
            ],
            [
                "category" => "Composition",
                "slug" => "composition",
                "list" => [
                    "Rule of Thirds",
                    "Leading Lines",
                    "Symmetry",
                    "Negative Space",
                    "Foreground and Background",
                    "Balance and Harmony"
                ]
            ],
            [
                "category" => "Portrait Photography",
                "slug" => "portrait-photography",
                "list" => [
                    "Posing Techniques",
                    "Facial Expressions",
                    "Natural Light Portraits",
                    "Studio Portraits",
                    "Environmental Portraits",
                    "Post-processing for Portraits"
                ]
            ],
            [
                "category" => "Landscape Photography",
                "slug" => "landscape-photography",
                "list" => [
                    "Scouting Locations",
                    "Golden Hour Photography",
                    "Long Exposure",
                    "Composition in Landscapes",
                    "Filters and Graduated ND",
                    "Post-processing for Landscapes"
                ]
            ],
            [
                "category" => "Event Photography",
                "slug" => "event-photography",
                "list" => [
                    "Candid Shots",
                    "Group Shots",
                    "Low-light Photography",
                    "Fast-paced Environments",
                    "Composition for Events",
                    "Photojournalistic Approach"
                ]
            ],


            // group 13


            [
                "category" => "Hardware Repair",
                "slug" => "hardware-repair",
                "list" => [
                    "Computer Repair",
                    "Mobile Device Repair",
                    "Printer Repair",
                    "Networking Equipment Repair",
                    "Hardware Troubleshooting",
                    "Component Replacement"
                ]
            ],
            [
                "category" => "Software Troubleshooting",
                "slug" => "software-troubleshooting",
                "list" => [
                    "Operating System Issues",
                    "Software Installation and Configuration",
                    "Driver Issues",
                    "Software Compatibility",
                    "Virus and Malware Removal",
                    "Data Recovery"
                ]
            ],
            [
                "category" => "Network Troubleshooting",
                "slug" => "network-troubleshooting",
                "list" => [
                    "Network Connectivity Issues",
                    "IP Configuration",
                    "DNS and DHCP Troubleshooting",
                    "Wireless Network Setup",
                    "Network Security",
                    "VPN and Remote Access"
                ]
            ],
            [
                "category" => "Customer Support",
                "slug" => "customer-support",
                "list" => [
                    "Issue Diagnosis and Resolution",
                    "Troubleshooting Assistance",
                    "Effective Communication",
                    "Ticket Management",
                    "Escalation Handling",
                    "Customer Satisfaction"
                ]
            ],
            [
                "category" => "Technical Documentation",
                "slug" => "technical-documentation",
                "list" => [
                    "Repair and Troubleshooting Guides",
                    "User Manuals",
                    "Knowledge Base Articles",
                    "FAQs",
                    "Standard Operating Procedures (SOPs)",
                    "Process Documentation"
                ]
            ],
            [
                "category" => "Remote Support",
                "slug" => "remote-support",
                "list" => [
                    "Remote Desktop Assistance",
                    "Screen Sharing",
                    "Software and Driver Installation",
                    "Remote Troubleshooting",
                    "Remote System Access",
                    "Remote Support Tools"
                ]
            ],
            [
                "category" => "Customer Relationship Management",
                "slug" => "customer-relationship-management",
                "list" => [
                    "Issue Tracking",
                    "Customer Data Management",
                    "Case Management",
                    "Service Level Agreement (SLA) Management",
                    "Customer Feedback and Surveys",
                    "Continuous Improvement"
                ]
            ],
            [
                "category" => "Electronic Circuitry",
                "slug" => "electronic-circuitry",
                "list" => [
                    "Electronic Component Testing",
                    "Soldering and Desoldering",
                    "Circuit Board Repair",
                    "Multimeter Usage",
                    "Power Supply Troubleshooting",
                    "Electronic Circuit Design"
                ]
            ],
            [
                "category" => "Troubleshooting Methodologies",
                "slug" => "troubleshooting-methodologies",
                "list" => [
                    "Root Cause Analysis",
                    "Systematic Problem Solving",
                    "Debugging Techniques",
                    "Log Analysis",
                    "Critical Thinking",
                    "Testing and Validation"
                ]
            ],

        ]);

        $categories->each(function ($category) {
            $projectCty = ProjectCategory::create([
                'uid' => uid(),
                'name' => $category['category'],
                'slug' => Str::slug(strtolower($category['category'])),
                'seo_description' => $category['category'],
                'ogimage_id' => 'projects/categories/ogimages/3C06E9F3D980A11F2CB307BA9.jpg',
                'thumbnail_id' => 'projects/categories/thumbnails/9A89DB3512E17A47B4CCD27A5.jpg'
            ]);

            collect($category['list'])->each(function ($skill) use ($projectCty) {
                ProjectSkill::create([
                    'uid' => uid(),
                    'name' => $skill,
                    'slug' => Str::slug(strtolower($skill)),
                    'category_id' => $projectCty->id
                ]);
            });
        });
    }
}
