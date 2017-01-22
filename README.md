# mobischeduler
lets higher.team students schedule one on ones with teacher via slack, video chat, or in person

```
CREATE TABLE `video_chat_meetups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `appear.in_username` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `slack_meetups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `slack_username` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `in_person_meetups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
