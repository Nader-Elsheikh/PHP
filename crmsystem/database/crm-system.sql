
--
-- Database: `crm-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `crm_contact`
--

CREATE TABLE `crm_contact` (
  `id` int(11) NOT NULL,
  `contact_title` varchar(255) NOT NULL,
  `contact_first` varchar(255) NOT NULL,
  `contact_middle` varchar(255) NOT NULL,
  `contact_last` varchar(255) NOT NULL,
  `initial_contact_date` datetime NOT NULL DEFAULT current_timestamp(),
  `title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` enum('Lead','Proposal','Customer / won','Archive') NOT NULL,
  `website` varchar(255) NOT NULL,
  `sales_rep` int(11) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_description` text NOT NULL,
  `proposal_due_date` varchar(255) NOT NULL,
  `budget` int(11) NOT NULL,
  `deliverables` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crm_contact`
--

INSERT INTO `crm_contact` (`id`, `contact_title`, `contact_first`, `contact_middle`, `contact_last`, `initial_contact_date`, `title`, `company`, `industry`, `address`, `city`, `state`, `country`, `zip`, `phone`, `email`, `status`, `website`, `sales_rep`, `project_type`, `project_description`, `proposal_due_date`, `budget`, `deliverables`) VALUES
(1, '', 'David', '', 'Smith', '0000-00-00 00:00:00', '', 'ABC', 'Food', '', '', '', 'France', 112245, 123456789, 'david@tes.com', 'Lead', 'www.testabc.com', 1, '', '', '', 15000, ''),
(2, '', 'Goerge', '', 'Wood', '0000-00-00 00:00:00', '', 'XYZ', 'Motor', '', '', '', '', 0, 123456789, 'goerg@test.com', 'Lead', 'www.mtobc.com', 1, '', '', '', 0, ''),
(5, '', 'adam', '', 'smith', '2020-11-13 20:47:02', '', 'vzxvzx', 'xzvzx', '', '', '', '', 0, 123456789, 'dgsdgsd@wty.com', 'Proposal', 'www.mtobc.com', 1, '', '', '', 0, ''),
(6, '', 'xvzxxzv', '', 'xvzxvzxv', '2020-11-13 20:56:27', '', 'uyttyi', 'reyery', '', '', '', '', 0, 123456789, 'werwrwe@wr.com', 'Customer / won', 'www.fggg.com', 1, '', '', '', 3400, '');

-- --------------------------------------------------------

--
-- Table structure for table `crm_tasks`
--

CREATE TABLE `crm_tasks` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `task_type` varchar(255) NOT NULL,
  `task_description` text NOT NULL,
  `task_due_date` varchar(255) NOT NULL,
  `task_status` enum('Pending','Completed') NOT NULL,
  `task_update` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `sales_rep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crm_tasks`
--

INSERT INTO `crm_tasks` (`id`, `created`, `task_type`, `task_description`, `task_due_date`, `task_status`, `task_update`, `contact`, `sales_rep`) VALUES
(1, '2020-11-08 00:00:00', 'task', 'Lunch meeting', '2020-11-12', 'Pending', '', 1, 1),
(2, '0000-00-00 00:00:00', '', 'phone calls', '2020-11-06', 'Pending', '', 2, 3),
(3, '0000-00-00 00:00:00', '', 'Follow up email', '2020-11-05', 'Pending', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `crm_users`
--

CREATE TABLE `crm_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roles` enum('manager','sales') NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crm_users`
--

INSERT INTO `crm_users` (`id`, `name`, `email`, `password`, `roles`, `status`) VALUES
(1, 'Mark David', 'mark@phpzag.com', '202cb962ac59075b964b07152d234b70', 'sales', 1),
(2, 'Andy Smith', 'andy@phpzag.com', '202cb962ac59075b964b07152d234b70', 'manager', 1),
(3, 'Mary', 'mary@phpzag.com', '202cb962ac59075b964b07152d234b70', 'sales', 1),
(4, 'Rich', 'rich@phpzag.com', '202cb962ac59075b964b07152d234b70', 'sales', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crm_contact`
--
ALTER TABLE `crm_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_tasks`
--
ALTER TABLE `crm_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_users`
--
ALTER TABLE `crm_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crm_contact`
--
ALTER TABLE `crm_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `crm_tasks`
--
ALTER TABLE `crm_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `crm_users`
--
ALTER TABLE `crm_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;


