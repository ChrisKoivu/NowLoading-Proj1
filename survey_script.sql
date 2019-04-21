INSERT INTO `surveys` (`id`, `survey_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'parent', 'this is a survey for parents of autistic individuals', NULL, NULL),
(2, 'spectrum', 'survey for an adult on the autism spectrum', NULL, NULL),
(3, 'employer', 'survey for an employer of autistic individuals', NULL, NULL),
(4, 'professional', 'survey for individuals providing professional services to individuals on the spectrum', NULL, NULL),
(5, 'community', 'survey for those who have acquaintances or family members on the spectrum', NULL, NULL);

INSERT INTO `questions` (`id`, `survey_question`, `created_at`, `updated_at`) VALUES
(1, 'How can we help?', NULL, NULL),
(2, 'Is the individual you’re seeking to assist verbal or non-verbal?', NULL, NULL),
(3, 'How old is the individual you’re seeking to assist?', NULL, NULL),
(4, 'Is your child currently employed or \r\nseeking employment?\r\n', NULL, NULL);

INSERT INTO `question_survey` (`id`, `survey_id`, `question_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL);

INSERT INTO `responses` (`id`, `survey_question_response`, `question_id`, `created_at`, `updated_at`) VALUES
(1, 'No diagnosis yet, need more information', 1, NULL, NULL),
(2, 'New diagnosis, what’s next?', 1, NULL, NULL),
(3, 'Already diagnosed, looking for resources and help', 1, NULL, NULL),
(4, 'Verbal', 2, NULL, NULL),
(5, 'Non-verbal', 2, NULL, NULL),
(6, 'Birth to 3 years of age', 3, NULL, NULL),
(7, 'Preschool', 3, NULL, NULL),
(8, 'Elementary School', 3, NULL, NULL),
(9, 'Middle School', 3, NULL, NULL),
(10, 'High School', 3, NULL, NULL),
(11, 'Adult', 3, NULL, NULL),
(12, 'Currently Employed, working 30+ hours a week', 4, NULL, NULL),
(13, 'Currently Employed, working less than 30 hours a week', 4, NULL, NULL),
(14, 'Not employed, seeking Full Time employment', 4, NULL, NULL),
(15, 'Not employed, seeking Part-Time employment', 4, NULL, NULL),
(16, 'Not employed, not seeking employment', 4, NULL, NULL);
