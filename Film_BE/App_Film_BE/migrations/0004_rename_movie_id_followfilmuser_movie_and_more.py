# Generated by Django 5.0.1 on 2024-01-18 20:40

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('App_Film_BE', '0003_followfilmuser'),
    ]

    operations = [
        migrations.RenameField(
            model_name='followfilmuser',
            old_name='movie_id',
            new_name='movie',
        ),
        migrations.RenameField(
            model_name='followfilmuser',
            old_name='user_id',
            new_name='user',
        ),
    ]