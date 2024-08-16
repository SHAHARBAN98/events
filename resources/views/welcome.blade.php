<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Scheduler</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: blue; /* Background color set to blue */
            padding: 10px 20px;
            width: calc(100% - 250px); /* Adjust width for the sidebar */
            position: absolute;
            top: 0;
            left: 250px;
        }
        .navbar .logo {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }
        .navbar .nav-links {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .navbar .nav-links li {
            margin-left: 20px; /* Adjust space between links */
        }
        .navbar .nav-links li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease;
        }
        .navbar .nav-links li a:hover {
            color: #ddd;
        }
        .navbar .cart-icon {
            width: 24px;
            height: 24px;
            margin-left: 20px;
        }
        .navbar .search-bar {
            margin-left: 20px;
        }
        .navbar .search-bar input {
            padding: 5px;
            font-size: 16px;
        }
        .sidebar {
            width: 250px;
            background-color: blue; /* Background color set to blue */
            padding: 20px;
            color: #fff;
            height: 100vh; /* Full height sidebar */
            box-sizing: border-box;
        }
        .sidebar h2 {
            margin-top: 0;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 15px;
        }
        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
        }
        .sidebar ul li a:hover {
            color: #ddd;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            margin-left: 250px; /* Space for the sidebar */
            box-sizing: border-box;
        }
        .event-list {
            margin-top: 20px;
        }
        .event-list table {
            width: 100%;
            border-collapse: collapse;
        }
        .event-list th, .event-list td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .event-list th {
            background-color: blue; /* Background color set to blue */
            color: white;
            text-align: left;
        }
        .event-list tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .add-event-btn {
            display: block;
            margin: 20px auto;
            background-color: green; /* Background color set to green */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            width: fit-content;
            transition: background-color 0.3s ease;
        }
        .add-event-btn:hover {
            background-color: #004d00;
        }
        .event-form {
            margin-top: 20px;
        }
        .event-form h2 {
            margin-top: 0;
        }
        .event-form label {
            display: block;
            margin-bottom: 10px;
        }
        .event-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .event-form button {
            background-color: blue; /* Background color set to blue */
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .event-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        
        <ul>
            <li><a href="/create">Create Event</a></li>
            <li><a href="#">View Event</a></li>
            <li><a href="#">Create Session</a></li>
            <li><a href="#">View Session</a></li>
            <li><a href="#">Create Speaker</a></li>
            <li><a href="#">View Speaker</a></li>
            <li><a href="#">Optimized Schedule</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="navbar">
            <div class="logo">Event Scheduler</div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Sessions</a></li>
                <li><a href="#">Speakers</a></li>
                <li><a href="#">Schedule</a></li>
                <li><a href="#">Logout</a></li>
                
            </ul>
        </div>

        <div class="event-list">
            <h2>Event List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example rows, replace with dynamic content -->
                    <tr>
                        <td>Event 1</td>
                        <td>2024-08-16</td>
                        <td>Location 1</td>
                        <td><button>Edit</button> <button>Delete</button></td>
                    </tr>
                    <tr>
                        <td>Event 2</td>
                        <td>2024-08-17</td>
                        <td>Location 2</td>
                        <td><button>Edit</button> <button>Delete</button></td>
                    </tr>
                </tbody>
            </table>
            <button class="add-event-btn">Add New Event</button>
        </div>

        <div class="event-form">
            <h2>Create/Edit Event</h2>
            <form>
                <label for="event-title">Title</label>
                <input type="text" id="event-title" name="event-title" placeholder="Enter event title" required>

                <label for="event-date">Date</label>
                <input type="date" id="event-date" name="event-date" required>

                <label for="event-location">Location</label>
                <input type="text" id="event-location" name="event-location" placeholder="Enter event location" required>

                <button type="submit">Save </button>
                
                <button type="submit">Cancel</button>

            </form>
        </div>
    </div>

</body>
</html>
