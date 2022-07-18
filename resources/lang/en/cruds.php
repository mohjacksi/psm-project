<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'name'                      => 'Name',
            'name_helper'               => ' ',
            'email'                     => 'Email',
            'email_helper'              => ' ',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => ' ',
            'password'                  => 'Password',
            'password_helper'           => ' ',
            'roles'                     => 'Roles',
            'roles_helper'              => ' ',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'verified'                  => 'Verified',
            'verified_helper'           => ' ',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => ' ',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'project' => [
        'title'          => 'Project',
        'title_singular' => 'Project',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Project Name',
            'name_helper'        => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_by'         => 'Created By',
            'created_by_helper'  => ' ',
            'public'             => 'Public',
            'public_helper'      => ' ',
        ],
    ],
    'psmTab' => [
        'title'          => 'Psm Tab',
        'title_singular' => 'Psm Tab',
    ],
    'sample' => [
        'title'          => 'Sample',
        'title_singular' => 'Sample',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'name'                    => 'Sample Name',
            'name_helper'             => ' ',
            'details'                 => 'Details',
            'details_helper'          => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'project'                 => 'Project',
            'project_helper'          => ' ',
            'tissue'                  => 'Tissue',
            'tissue_helper'           => ' ',
            'replicate_number'        => 'Replicate Number',
            'replicate_number_helper' => ' ',
            'created_by'              => 'Created By',
            'created_by_helper'       => ' ',
            'species'                 => 'Species',
            'species_helper'          => ' ',
            'sample_condition'        => 'Sample Condition',
            'sample_condition_helper' => ' ',
            'channel'                 => 'Channel',
            'channel_helper'          => ' ',
        ],
    ],
    'dnaRegion' => [
        'title'          => 'Dna Region',
        'title_singular' => 'Dna Region',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'transcript' => [
        'title'          => 'Transcript',
        'title_singular' => 'Transcript',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => ' ',
            'transcript'                 => 'Transcript ID',
            'transcript_helper'          => ' ',
            'name'                       => 'Transcript Name',
            'name_helper'                => ' ',
            'type'                       => 'Transcript Type',
            'type_helper'                => ' ',
            'transcript_sequence'        => 'Transcript Sequence',
            'transcript_sequence_helper' => ' ',
            'created_at'                 => 'Created at',
            'created_at_helper'          => ' ',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => ' ',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => ' ',
        ],
    ],
    'psm' => [
        'title'          => 'Psm',
        'title_singular' => 'Psm',
        'fields'         => [
            'id'                               => 'ID',
            'id_helper'                        => ' ',
            'created_at'                       => 'Created at',
            'created_at_helper'                => ' ',
            'updated_at'                       => 'Updated at',
            'updated_at_helper'                => ' ',
            'deleted_at'                       => 'Deleted at',
            'deleted_at_helper'                => ' ',
            'spectra'                          => 'Spectra',
            'spectra_helper'                   => ' ',
            'fraction'                         => 'Fraction',
            'fraction_helper'                  => ' ',
            'peptide_modification'             => 'Peptide Modification',
            'peptide_modification_helper'      => ' ',
            'scan_num'                         => 'Scan Num',
            'scan_num_helper'                  => ' ',
            'precursor'                        => 'Precursor',
            'precursor_helper'                 => ' ',
            'isotope_error'                    => 'Isotope Error',
            'isotope_error_helper'             => ' ',
            'precursor_error'                  => 'Precursor Error',
            'precursor_error_helper'           => ' ',
            'charge'                           => 'Charge',
            'charge_helper'                    => ' ',
            'de_novo_score'                    => 'De Novo Score',
            'de_novo_score_helper'             => ' ',
            'msgf_score'                       => 'Msgf Score',
            'msgf_score_helper'                => ' ',
            'space_evalue'                     => 'Space Evalue',
            'space_evalue_helper'              => ' ',
            'evalue'                           => 'Evalue',
            'evalue_helper'                    => ' ',
            'precursor_svm_score'              => 'Precursor Svm Score',
            'precursor_svm_score_helper'       => ' ',
            'psm_q_value'                      => 'Psm Q Value',
            'psm_q_value_helper'               => ' ',
            'peptide_q_value'                  => 'Peptide Q Value',
            'peptide_q_value_helper'           => ' ',
            'missed_clevage'                   => 'Missed Clevage',
            'missed_clevage_helper'            => ' ',
            'experimental_pl'                  => 'Experimental Pl',
            'experimental_pl_helper'           => ' ',
            'predicted_pl'                     => 'Predicted Pl',
            'predicted_pl_helper'              => ' ',
            'delta_pl'                         => 'Delta Pl',
            'delta_pl_helper'                  => ' ',
            'created_by'                       => 'Created By',
            'created_by_helper'                => ' ',
            'peptide_with_modification'        => 'Peptide With Modification',
            'peptide_with_modification_helper' => ' ',
            'project'                          => 'Projects',
            'experiment'                       => 'Experiments',
            'biological_set'                   => 'Biological Set',
            'samples'                   => 'Samples',
        ],
    ],
    'option' => [
        'title'          => 'Options',
        'title_singular' => 'Option',
    ],
    'experimentTab' => [
        'title'          => 'Experiment Tab',
        'title_singular' => 'Experiment Tab',
    ],
    'experiment' => [
        'title'          => 'Experiment',
        'title_singular' => 'Experiment',
        'fields'         => [
            'id'                              => 'ID',
            'id_helper'                       => ' ',
            'name'                            => 'Name',
            'name_helper'                     => ' ',
            'created_at'                      => 'Created at',
            'created_at_helper'               => ' ',
            'updated_at'                      => 'Updated at',
            'updated_at_helper'               => ' ',
            'deleted_at'                      => 'Deleted at',
            'deleted_at_helper'               => ' ',
            'project'                         => 'Project',
            'project_helper'                  => ' ',
            'date'                            => 'Date',
            'date_helper'                     => ' ',
            'method'                          => 'Method',
            'method_helper'                   => ' ',
            'allowed_missed_cleavage'         => 'Allowed Missed Cleavage',
            'allowed_missed_cleavage_helper'  => ' ',
            'expression_threshold'            => 'Expression Threshold',
            'expression_threshold_helper'     => ' ',
            'reference_protein_source'        => 'Reference Protein Source',
            'reference_protein_source_helper' => ' ',
            'other_protein_source'            => 'Other Protein Source',
            'other_protein_source_helper'     => ' ',
            'psm_file_name'                   => 'Psm File Name',
            'psm_file_name_helper'            => ' ',
            'metadata'                        => 'Metadata',
            'metadata_helper'                 => ' ',
            'species'                         => 'Species',
            'species_helper'                  => ' ',
            'created_by'                      => 'Created By',
            'created_by_helper'               => ' ',
        ],
    ],
    'biologicalSet' => [
        'title'          => 'Biological Set',
        'title_singular' => 'Biological Set',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'name'                   => 'Name',
            'name_helper'            => ' ',
            'strip'                 => 'Strip',
            'strip_helper'          => ' ',
            'fragment_method'        => 'Fragment Method',
            'fragment_method_helper' => ' ',
            'experiment'             => 'Experiment',
            'experiment_helper'      => ' ',
            'labeling_number'        => 'Labeling Number',
            'labeling_number_helper' => ' ',
            'created_by'             => 'Created By',
            'created_by_helper'      => ' ',
        ],
    ],
    'fraction' => [
        'title'          => 'Fraction',
        'title_singular' => 'Fraction',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'biological_set'           => 'Biological Set',
            'biological_set_helper'    => ' ',
            'spectra_file_name'        => 'Spectra File Name',
            'spectra_file_name_helper' => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'generalTab' => [
        'title'          => 'General Tab',
        'title_singular' => 'General Tab',
    ],
    'fragmentMethod' => [
        'title'          => 'Fragment Method',
        'title_singular' => 'Fragment Method',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
    'strip' => [
        'title'          => 'Strip',
        'title_singular' => 'Strip',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'channel' => [
        'title'          => 'Channel',
        'title_singular' => 'Channel',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'biological_set'        => 'Biological Set',
            'biological_set_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'created_by'            => 'Created By',
            'created_by_helper'     => ' ',
        ],
    ],
    'peptideProteinTab' => [
        'title'          => 'Peptide Protein Tab',
        'title_singular' => 'Peptide Protein Tab',
    ],
    'otherRequirementTab' => [
        'title'          => 'Other Requirement Tab',
        'title_singular' => 'Other Requirement Tab',
    ],
    'protein' => [
        'title'          => 'Protein',
        'title_singular' => 'Protein',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Protein Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'sequence'          => 'Sequence',
            'sequence_helper'   => ' ',
            'source'            => 'Source',
            'source_helper'     => ' ',
            'metadata'          => 'Metadata',
            'metadata_helper'   => ' ',
            'peptide'           => 'Peptide',
            'peptide_helper'    => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'protein_file'                   => 'Protein File',
        ],
    ],
    'peptide' => [
        'title'          => 'Peptide',
        'title_singular' => 'Peptide',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'sequence'                     => 'Sequence',
            'sequence_helper'              => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'canonical'                    => 'Canonical',
            'canonical_helper'             => ' ',
            'canonical_frame_value'        => 'Canonical Frame Value',
            'canonical_frame_value_helper' => ' ',
            'category'                     => 'Peptide Category',
            'category_helper'              => ' ',
            'created_by'                   => 'Created By',
            'created_by_helper'            => ' ',
            'peptide_file'                   => 'Peptide File',
        ],
    ],
    'tissue' => [
        'title'          => 'Tissue',
        'title_singular' => 'Tissue',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'sampleCondition' => [
        'title'          => 'Sample Condition',
        'title_singular' => 'Sample Condition',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'species' => [
        'title'          => 'Species',
        'title_singular' => 'Species',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'peptideWithModification' => [
        'title'          => 'Peptide With Modification',
        'title_singular' => 'Peptide With Modification',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
    'peptidCategory' => [
        'title'          => 'Peptid Category',
        'title_singular' => 'Peptid Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
    'proteinType' => [
        'title'          => 'Protein Type',
        'title_singular' => 'Protein Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
    'uploadForm' => [
        'title'          => 'Upload PSM file',
        'title_singular' => 'Upload PSM file',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'project'           => 'Project',
            'project_helper'    => ' ',
            'experiment'        => 'Experiment',
            'experiment_helper' => ' ',
            'psm_file'          => 'Psm File',
            'psm_file_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
];
